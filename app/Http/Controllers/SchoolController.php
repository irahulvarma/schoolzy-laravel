<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;
use App\Http\Requests\StoreSchool;
use Illuminate\Support\Facades\Auth;
use App\School;

class SchoolController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth');
    }

    function addSchool()
    {
        $boards = Board::all();
        return view('school.add', ['boards' => $boards]);
    }

    function createSchool(StoreSchool $request)
    {
        $request->validated();

        $current_user = Auth::user();
        $school = new School;
        $school->school_name = $request->input('school_name');
        $school->principal = $request->input('principal');
        $school->board = $request->input('board');
        $school->medium = $request->input('medium');
        $school->foundation_year = $request->input('foundation_year');        
        $school->creator()->associate($current_user);
        $school->updator()->associate($current_user);
        $school->save();

        return redirect('add-school')->with('success', 'School inserted successfully');
    }
}
