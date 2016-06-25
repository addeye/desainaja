<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'email', 'password','id_level'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = [
        'level'
    ];

    public function getLevelAttribute()
    {
        return MLevel::find($this->id_level);
    }

//    public function level()
//    {
//        return $this->hasMany('App\MLevel','id','id_level');
//    }
}
