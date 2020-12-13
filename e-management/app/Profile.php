<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = array('id');
    
    public static $rules = array(
            'user_id' => 'required',
            'name'=> 'required',
            'start_time'=> 'required',
            'end_time' => 'required',
            'break_time'=> 'required',
            'status' => 'status'
        );
}
