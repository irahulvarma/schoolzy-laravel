<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable = [
        'school_name',
        'principal_name',
        'mode_medium',
        'board',
        'foundation_year',
        'logo_url',
        'created_by',
        'updated_by'        
    ];
}
