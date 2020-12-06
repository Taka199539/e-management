<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Attendance;

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
        
        $attendances = Attendance::all();
    
        
        return view('user.attendance.index', ['attendances' => $attendances]);
    }
    
    //ユーザーの勤務情報編集
    public function edit(Request $request)
    {
       
        $attendance = Attendance::find($request->id);
        
        
        
        return view('user/attendance/edit',['attendance' => $attendance]);
    }
    
    public function update(Request $request)
    {
        
        $this->validate($request, Attendance::$rules);
        
        $attendance_form = $request->all();
        
        $attendance->fill($attendance_form)->save();
        
        return redirect('user/attendance/index');
    }
    
    public function delete()
    {
        
        return redirect('user/attendance/index');
    }
}









