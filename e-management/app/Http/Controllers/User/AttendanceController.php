<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Attendance;
use App\History;
use App\Profile;

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
        $profiles = Profile::all();
        
        $attendances = Attendance::all();
        
        $histories = History::all();
        
        return view('user.attendance.index', ['attendances' => $attendances, 'histories' => $histories, 'profiles' => $profiles]);
    }
    
    //ユーザーの勤務情報編集
    public function edit(Request $request)
    {
       
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
    
    public function delete()
    {
        return redirect('user/attendance/index');
    }
}








