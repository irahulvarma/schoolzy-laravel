<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;
use App\Http\Requests\StoreSchool;
use App\Http\Requests\EditSchool;
use Illuminate\Support\Facades\Auth;
use App\School;

class SchoolController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth');
    }

    function listSchool()
    {
        $schools = School::all();

        return view('school.list',  ['schools' => $schools]);
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
        $school->board_id = $request->input('board');
        $school->medium = $request->input('medium');
        $school->foundation_year = $request->input('foundation_year');        
        $school->creator()->associate($current_user);
        $school->updator()->associate($current_user);
        $school->save();

        return redirect('add-school')->with('success', 'School inserted successfully');
    }

    function editSchool($id, EditSchool $request)
    {
        $request->validated();

        $school = School::find($id);
        $boards = Board::all();

        return view('school.edit', ['school' => $school, 'boards' => $boards]);
    }

    function updateSchool($id, StoreSchool $request)
    {
        $request->validated();

        $current_user = Auth::user();
        $school = School::find($id);
        $school->school_name = $request->input('school_name');
        $school->principal = $request->input('principal');
        $school->board_id = $request->input('board');
        $school->medium = $request->input('medium');
        $school->foundation_year = $request->input('foundation_year');        
        $school->creator()->associate($current_user);
        $school->save();

        return redirect()->route('edit-school',['id' => $school->id])->with('success', 'School updated successfully');
    }
}
