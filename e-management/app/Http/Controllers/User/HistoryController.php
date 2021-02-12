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
         
        
        //打刻は1日1回まで
        $oldHistory = History::where('user_id', $attendance->id)->latest()->first();
        
        if ($oldHistory) {
        $oldHistoryAttendance_Start = new Carbon($oldHistory->attendance_start);
        $oldHistoryDay = $oldHistoryAttendance_Start->startOfDay();
        }
        
        $newHistoryDay = Carbon::today();
    
        
        
        return redirect('user/attendance/index')->with('flash_message', 'おはようございます！');
    }
    
    public function attendance_end(Request $request)
    {
    
        $attendance = new Attendance;
        
        $attendance->id = Auth::id();
        
        $history = History::where('user_id', Auth::id())->orderBy('attendance_start', 'desc')->first(); 
        
        //打刻がされていない場合の処理
        if( !empty($history->attendance_end)) {
            return redirect()->back()->with('flash_message', '出勤の打刻がされていません。');
        }
        
        
        History::where('id', $history->id)->update([
            'attendance_end' => Carbon::now()]);
        
        
        return redirect('user/attendance/index')->with('flash_message', 'お疲れ様でした！');
        
    }
}

