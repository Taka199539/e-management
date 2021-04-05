<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model

{
    
    protected $fillable = ['user_id' => 'required',
                           'attendance_start' => 'required',
                           'attendance_end' => 'nullable'];

    /**
     * attendance関連付け
     * 1対多
     */
    public function attendance()
    {
        $this->belongsTo(Attendance::class);
    }
    
     /**
     * User関連付け
     * 1対1
     */
      public function user()
     {
         $this->belongsTo(User::class);
     }
     
     public static function getHistory($from, $until)
     {
         
         $until = $until.' 23:59:59';
         
         $histories = History::WhereBetween('created_at', [$from, $until])->get();
         
         
         return $histories;
     }
    
}
