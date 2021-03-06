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


    public function userdetail() {
        return $this->hasOne('App\Userdetail');
    }

    public function products() {
        return $this->hasMany('App\Product');
    }

    public function pics8() {
        return $this->hasMany('App\Pic')->take(8);
    }

    public function pics() {
        return $this->hasMany('App\Pic');
    }
}
