<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model

{
    
    protected $fillable = ['user_id' => 'required',
                           'attendance_start' => 'required',
                           'attendance_end' => 'required'];

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
         $this->belongsTo('App\User');
     }
    
}
