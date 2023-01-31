<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $table = 'school';

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

    function board()
    {
        return $this->belongsTo('App\Board');
    }

    function creator()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    function updator()
    {
        return $this->belongsTo('App\User', 'updated_by');
    }

    function address()
    {
        return $this->morphOne('App\Address', 'addressable');
    }

}
