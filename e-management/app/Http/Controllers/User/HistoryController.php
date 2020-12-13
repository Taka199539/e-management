<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Attendance;
use App\History;

class HistoryController extends Controller
{
    //
    public function attendance_start(Request $request)
    {
        $attendance = new Attendance;
        
        $attendance->user_id = $request->user()->id;
        
        $history = History::create([
            'user_id' => $attendance->user_id,
            'attendance_id' => $attendance->attendance_id,
            'attendance_start' => Carbon::now(),]);
        $histories = $attendance->history();
        
        $newHistoryDay = Carbon::today();
        
        //打刻は1日1回まで
        $oldHistory = History::Where('attendance_id', $attendance->user_id)->latest()->first();
        if(oldHistory) {
            $oldHistoryAttendance_start = new Carbon($oldHistory->attendance_start);
            $oldHistoryDay = $oldHistroyDay->startOfDay();
        }
        
        //直前に退勤打刻がされていない場合の処理
        if(($oldHistoryDay == $newOldHistoryDay) && (empty($oldHistory->attendance_end))) {
            return redirect()->back->with('既に打刻されています。');
        }
        
        return redirect('user/attendance/index');
    }
    
    public function attedance_end(Request $request)
    {
    
        $attendance->user_id = $request->user()->id;
        
        $history = History::where('attendance_id', $attendance->user_id)->latest()->latest();
            
        if(!empty($history->attendance_end)) {
            return redirect()->back()->with('既に打刻されています。');
        }
         $history->update([
            'user_id' => $attendance->user_id,
            'attendance_id' => $attendance->attendance_id,
            'attendance_end' => Carbon::now()
        ]);
        
        return redirect('user/attendance/index');
        
    }
}
