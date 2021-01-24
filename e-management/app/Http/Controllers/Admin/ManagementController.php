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
        
        $profile->user_id = $request->user()->id;
        
        
        //入力情報を保存
        $profile->fill($form);
        $profile->save();
        
        return redirect('admin/management/dashboard');
    }
    
    //ユーザー情報一覧
    public function information(Request $request)
    {
        
        $profiles = User::All();
        
        return view('admin.management.information', ['profiles' => $profiles]);
    }
    
    //ユーザー情報の削除
    public function delete(Request $request)
    {
        //該当するProfileモデルを検索
        $user = User::find($request->id);
        $profile = Profile::find($request->id);
        //削除
        $user->delete();
        $profile->delete();
        
        return redirect('admin/management/dashboard');
    }

    
    //ユーザー勤務記録
    public function record(Request $request)
    {
        
        $attendances = Attendance::all();
        
        $users = User::All();
        
        $histories = History::all();
        
        return view('admin.management.record', ['attendances' => $attendances, 'histories' => $histories, 'users' => $users]);
    }
    
    //CSV出力
    public function csv()
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

