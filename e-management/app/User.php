<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
     /**
     * Attendance関連付け
     * 1対多
     */
    public function attendance()
    {
        return $this->hasMany('App\Attendance');
    }
    
    /**
     * History関連付け
     * 1対多
     */
    public function history()
    {
        return $this->hasMany('App\History');
    }
    
    /**
     * History関連付け
     * 1対1
     */
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }
}
