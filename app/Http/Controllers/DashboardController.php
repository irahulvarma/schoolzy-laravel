<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class DashboardController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    function index()
    {
        return view('home');
    }

    function editProfile()
    {
        return view('user.user-profile');
    }

    function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->position = $request->input('position');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();

        return redirect()->route('user-profile');
    }

    function users()
    {
        $users = User::all();

        return view('user.all', ['users' => $users]);
    }
}
