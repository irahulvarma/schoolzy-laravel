<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable = [
        'school_name',
        'principal',
        'medium',
        'board',
        'foundation_year',
        'logo',
        'created_by',
        'updated_by'        
    ];

    function creator()
    {
        return $this->hasOne('App\User', 'created_by');
    }

    function updator()
    {
        return $this->hasOne('App\User', 'updated_by');
    }


}
