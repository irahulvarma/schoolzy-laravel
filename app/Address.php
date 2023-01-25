<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $table = 'address';

    function addressable()
    {
        return $this->morphTo();
    }
}
