<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    //
    protected $guarded = array('id');
    
    public static $rules = array(
            'user_id' => 'required',
            'date'=> 'required',
            'break_time'=> 'required',
            'out_time' => 'required',
            'diary'=> 'required',
        );

    /**
     * History関連付け
     * 1対多
     */
    public function history()
    {
        $this->hasMany(History::class);
    }
    
     /**
     * User関連付け
     * 1対1
     */
     public function user()
     {
         $this->belongsTo('App\User');
     }
     
     public static function getAttendance($from, $until)
     {
         $until = $until.' 23:59:59';
         
         $attendances = Attendance::WhereBetween('created_at', [$from, $until])->get();
         
         
         return $attendances;
     }
}
