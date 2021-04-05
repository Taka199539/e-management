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
    
    public function attendance_start(Request $request)
    {  
        
        $attendance = new Attendance;
        
        $attendance->id = Auth::id();
        
        
        $history = new History; 
        $history->user_id = Auth::id();
        $now = Carbon::now();
        $history->attendance_start = $now;
        
       
        $history->save();
         
        
        
        
        return $now->format('Y-m-d H:i:s');
    }
    
    public function attendance_end(Request $request)
    {
    
        $attendance = new Attendance;
        
        $attendance->id = Auth::id();
        
        $history = History::where('user_id', Auth::id())->orderBy('attendance_start', 'desc')->first(); 
        
        
        //打刻がされていない場合の処理
        if( !empty($history->attendance_end)) {
            return 'no_attendance_start';
        }
        
        $now = Carbon::now();
        
        History::where('id', $history->id)->update([
            'attendance_end' => $now]);
        
        
        return $now->format('Y-m-d H:i:s');
        
    }
}


