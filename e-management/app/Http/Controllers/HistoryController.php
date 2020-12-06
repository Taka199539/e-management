<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Attendance;
use App\History;

class HistoryController extends Controller
{
    //
    public function punchIn()
    {
    
        
        $history = History::create([
            'attendance_id' =>id,
            'punchIn' => Carbon::now(),]);
        $histories = $user->history();
            
        $newHistoryDay = Carbon::today();
    }
    
    public function punchOut()
    {
        
        
        $history->update([
            'punchOut' => Carbon::now(),]);
        
    }
}
