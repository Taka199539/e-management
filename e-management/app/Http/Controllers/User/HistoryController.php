<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Attendance;
use App\History;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    //
    public function attendance_start(Request $request)
    {
        $attendance = new Attendance;
        
        $attendance->id = Auth::id();
        
        
        $history = new History; 
        $history->user_id = Auth::id();
        $history->attendance_start = Carbon::now();
         
        $history->save();
        
        return redirect('user/attendance/index');
    }
    
    public function attendance_end(Request $request)
    {
    
        $attendance = new Attendance;
        
        $attendance->id = Auth::id();
        
        $history = History::where('user_id', Auth::id());
        
        $history->update([
            'attendance_end' => Carbon::now()]);
        
        return redirect('user/attendance/index');
        
    }
}
