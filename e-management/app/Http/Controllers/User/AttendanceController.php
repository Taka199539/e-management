<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attendance;
use App\History;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
   
    
    //ユーザーの勤務情報作成
     public function add()
    {
        return view('user.attendance.create');
    }
    
    public function create(Request $request)
    {
       
        $attendance = new Attendance();
        $form = $request->all();
        
        
        $attendance->user_id = $request->user()->id;
        
        //フォームから送信されてきた_tokenを削除
        unset($form['_token']);
        
        //入力情報保存
        $attendance->fill($form);
        $attendance->save();
         
        return redirect('user/attendance/index');
    }
    
     //勤務表の表示
    public function index(Request $request)
    {
        
        $profile = Profile::where('user_id', $request->user()->id)->first();
        
        $attendances = Attendance::where('user_id', $request->user()->id)->get();
       
        $histories = History::where('user_id', $request->user()->id)->get();
        
        if (!empty($request['from']) && !empty($request['until'])) {
            //ハッシュタグの選択された20xx/xx/xx ~ 20xx/xx/xxのレポート情報を取得
            $attendances = DB::table('attendances')
            ->where('user_id', $request->user()->id)
            ->WhereBetween('attendances.created_at', [$request['from'], $request['until']])
            ->get();
            $histories = DB::table('histories')
            ->WhereBetween('histories.created_at', [$request['from'], $request['until']])
            ->get();
        } elseif  (!empty($request['from']) && empty($request['until'])) {
            $attendances = DB::table('attendances')
            ->where('user_id', $request->user()->id)
            ->WhereDate('attendances.created_at', [$request['from'], $request['until']])
            ->get();
            $histories = DB::table('histories')
            ->where('user_id', $request->user()->id)
            ->WhereDate('histories.created_at', [$request['from'], $request['until']])
            ->get();
        } elseif (empty($request['from']) && !empty($request['until'])) {
            $attendances = DB::table('attendances')
            ->where('user_id', $request->user()->id)
            ->WhereDate('attendances.created_at', [$request['from'], $request['until']])
            ->get();
            $histories = DB::table('histories')
            ->where('user_id', $request->user()->id)
            ->WhereDate('histories.created_at', [$request['from'], $request['until']])
            ->get();
        
            //リクエストデータがなければそのままで表示
            $attendances = Attendance::get();
            $histories = History::get();
        }
    
        
        return view('user.attendance.index', ['attendances' => $attendances, 'histories' => $histories, 'profile' => $profile, 'from_date' => $request->from, 'until_date' => $request->until]);
    }
    
    //ユーザーの勤務情報編集
    public function edit(Request $request)
    {
        //ユーザーIDを検索
        $attendance = Attendance::find($request->id);
        
        
        
        return view('user/attendance/edit',['attendance_form' => $attendance]);
    }
    
    public function update(Request $request)
    {
        
        $attendance = Attendance::find($request->id);
        
        //送信されてきたフォームデータを格納
        $attendance_form = $request->all();
        
        //データを上書きして保存
        $attendance->fill($attendance_form)->save();
        
        return redirect('user/attendance/index');
    }
}









