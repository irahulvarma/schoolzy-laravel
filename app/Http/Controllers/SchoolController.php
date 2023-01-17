<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    //
    function addSchool()
    {
        return view('school.add');
    }
}
