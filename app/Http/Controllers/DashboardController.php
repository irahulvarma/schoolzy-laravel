<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Http\Requests\StoreUser;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

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

    function editMyProfile()
    {
        return view('user.my-profile');
    }

    function updateMyProfile(StoreUser $request)
    {
        $validated = $request->validated();

        $user = Auth::user();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->position = $request->input('position');
        $user->phone = $request->input('phone');
        $user->save();

        return redirect('my-profile')->with('success', 'User Profile saved successfully');
    }

    function users()
    {
        $users = User::all();

        return view('user.all', ['users' => $users]);
    }

    function editUserProfile($user_id)
    {
        $user = User::find($user_id);
        return view('user.edit-user-profile', ['user' => $user]);
    }

    function updateUserProfile($user_id, StoreUser $request)
    {
        $validated = $request->validated();

        $user = User::find($user_id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->position = $request->input('position');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();

        return redirect()->route("edit-user-profile", ['id' => $user_id])->with('success', 'User Profile saved successfully');
    }

    function updateUserRole($user_id, StoreUser $request) 
    {
        $validated = $request->validated();

        $user = User::find($user_id);
        $user->role = $request->input('role');
        $user->save();

        return redirect()->route("edit-user-profile", ['id' => $user_id])->with('success', 'Role saved successfully');
    }

    function updateUserEmail($user_id, Request $request) 
    {
        $user = User::find($user_id);

        $validator = Validator::make($request->all(), [
            'email' => [
                'required',
                Rule::unique('users')->ignore($user),
            ],
        ]);

        if ($validator->fails()) {
            return redirect()->route("edit-user-profile", ['id' => $user_id])
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route("edit-user-profile", ['id' => $user_id])->with('success', 'Email saved successfully');
    }

    function addUserProfileForm()
    {
        return view('user.add-user-profile');
    }

    function createUser(StoreUser $request)
    {

        $validated = $request->validated();

        $user = new User;
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->position = $request->input('position');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->role = $request->input('role');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect()->route('users');

    }
}
