<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attendance;
use App\History;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\DB;

class ManagementController extends Controller
{
    
    //管理画面の表示
    public function dashboard(Request $request)
    {
        
        return view('admin/management/dashboard');
    }
    
     public function add()
    {
        return view('admin.management.resister');
    }
    
     //ユーザー情報登録画面
    public function resister(Request $request)
    {
        $profile = new Profile;
        
        $form = $request->all();
    
        
        
        //入力情報を保存
        $profile->fill($form);
        $profile->save();
        
        return redirect('admin/management/dashboard');
    }
    
    //ユーザー情報一覧
    public function information(Request $request)
    {
        
        $profiles = DB::table('profiles')
            ->leftJoin('users', 'profiles.user_id', '=', 'users.id')
            ->get();
        
        return view('admin.management.information', ['profiles' => $profiles]);
    }
    
    //ユーザー情報の削除
    public function delete(Request $request)
    {
        $profiles = DB::table('profiles')
            ->leftJoin('users', 'profiles.user_id', '=', 'users.id')
            ->get();
            
        //該当するProfileモデルを検索する
        $profiles = profile::find($request->id);
        //削除
     
        $profiles->delete();
        
        return redirect('admin/management/dashboard');
    }

    
    //ユーザー勤務記録
    public function record(Request $request)
    {
        
        $attendances = DB::table('attendances')
            ->leftJoin('users', 'attendances.user_id', '=', 'users.id')
            ->get();
        
        
        $histories = DB::table('histories')
            ->leftJoin('users', 'histories.user_id', '=', 'users.id')
            ->get();
        
        
            
        if (!empty($request['from']) && !empty($request['until'])) {
            //ハッシュタグの選択された20xx/xx/xx ~ 20xx/xx/xxのレポート情報を取得
          //  $attendances = Attendance::getAttendance($request['from'], $request['until']);
          $attendances = DB::table('attendances')
            ->leftJoin('users', 'attendances.user_id', '=', 'users.id')
            ->WhereBetween('attendances.created_at', [$request['from'], $request['until']])
            ->get();
          $histories = DB::table('histories')
            ->leftJoin('users', 'histories.user_id', '=', 'users.id')
            ->WhereBetween('histories.created_at', [$request['from'], $request['until']])
            ->get();
        } elseif  (!empty($request['from']) && empty($request['until'])) {
            $attendances = DB::table('attendances')
            ->leftJoin('users', 'attendances.user_id', '=', 'users.id')
            ->WhereDate('attendances.created_at', [$request['from'], $request['until']])
            ->get();
            $histories = DB::table('histories')
            ->leftJoin('users', 'histories.user_id', '=', 'users.id')
            ->WhereDate('histories.created_at', [$request['from'], $request['until']])
            ->get();
        } elseif (empty($request['from']) && !empty($request['until'])) {
            $attendances = DB::table('attendances')
            ->leftJoin('users', 'attendances.user_id', '=', 'users.id')
            ->WhereDate('attendances.created_at', [$request['from'], $request['until']])
            ->get();
            $histories = DB::table('histories')
            ->leftJoin('users', 'histories.user_id', '=', 'users.id')
            ->WhereDate('histories.created_at', [$request['from'], $request['until']])
            ->get();
        
            //リクエストデータがなければそのままで表示
            $attendances = Attendance::get();
            $histories = History::get();
        }
        
        
        return view('admin.management.record', ['attendances' => $attendances, 'histories' => $histories]);
    }
    
    //CSV出力
    public function csv(Request $request)
    {
    
        
        $histories = DB::table('histories')
            ->leftJoin('users', 'histories.user_id', '=', 'users.id')
            ->get();
        
        $attendances = DB::table('attendances')
            ->leftJoin('users', 'attendances.user_id', '=', 'users.id')
            ->get();
            
        

        $csvExporter = new \Laracsv\Export();

        $csvExporter->beforeEach(function ($history) {
        });
        
        $csvExporter->beforeEach(function ($attendance) {
            
        });
        
        
        //historiesテーブル
        $csvExporter->build($histories, [
            'name'=>'ユーザー名',
            'attendance_start'=>'出勤',
            'attendance_end' => '退勤'
        ]);
        
        //attendanceテーブル
        $csvExporter->build($attendances, [
            'name'=>'ユーザー名',
            'date'=>'日付',
            'break_time'=>'休憩',
            'out_time'=>'時間外',
            'diary'=>'日報'
        ]);

        //CSV読み込み
        $csvReader = $csvExporter->getReader();

        $csvReader->setOutputBOM(\League\Csv\Reader::BOM_UTF8);

        $filename = 'sample.csv';

        return response((string) $csvReader)
            ->header('Content-Type', 'text/csv; charset=UTF-8')
            ->header('Content-Disposition', 'attachment; filename="'.$filename.'"');
     
        return view('admin.management.record');
    }
}

