<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model

{
    
    protected $fillable = ['user_id', 'punchIn', 'punchOut'];

    /**
     * attendance関連付け
     * 1対多
     */
    public function attendance()
    {
        $this->belongsTo(Attendance::class);
    }
    
}
