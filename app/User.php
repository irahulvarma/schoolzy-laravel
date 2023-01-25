<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
        'position', 'display_picture', 'phone', 'role'
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

    function getFullNameAttribute() 
    {
        return ucfirst($this->first_name)." ".ucfirst($this->last_name);
    }

    function schoolCreator()
    {
        return $this->hasMany('App\School', 'created_by');
    }

    function schoolUpdator()
    {
        return $this->hasMany('App\School', 'updated_by');
    }

    function school()
    {
        return $this->belongsTo('App\School');
    }

    function address()
    {
        return $this->morphOne('App\Address', 'addressable');
    }
}
