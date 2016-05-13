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

    /*public function articulos(){
        return $this->hasMany('App/Articulo');
    }*/
    //----------------------------------------
    public function tasks(){
        return $this->hasMany('Task::class');
    }
    //----------------------------------------

    public function articulos(){
        return $this->hasMany('App\Articulo');
    }
}
