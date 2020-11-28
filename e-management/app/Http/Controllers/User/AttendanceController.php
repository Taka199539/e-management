<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    public function add()
    {
        return view('user.attendance.index');
    }
    
    //勤務表の表示
    public function index()
    {
        return view('user/attendance/index');
    }
    
    //ユーザーの勤務情報の編集
    public function edit()
    {
        return view('user/attendance/edit');
    }
    
    public function resiter()
    {
        return redirect('user/attendance/index');
    }
    
    public function delete()
    {
        return redirect('user/attendance/index');
    }
}



