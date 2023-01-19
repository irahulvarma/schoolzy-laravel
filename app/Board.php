<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    //

    function schools()
    {
        return $this->hasMany('App\School', 'board');
    }
}
