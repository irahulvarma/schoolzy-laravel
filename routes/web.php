<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/language/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('language');

Route::get('/my-profile', 'DashboardController@editMyProfile')->name('my-profile');

Route::post('/update-my-profile', 'DashboardController@updateMyProfile')->name('update-my-profile');

Route::get('/users', 'DashboardController@users')->name('users');

Route::get('/edit-user-profile/{id}', 'DashboardController@editUserProfile')->name('edit-user-profile');

Route::post('/update-user-profile/{id}', 'DashboardController@updateUserProfile')->name('update-user-profile');

Route::post('/update-user-role/{id}', 'DashboardController@updateUserRole')->name('update-user-role');

Route::post('/update-user-email/{id}', 'DashboardController@updateUserEmail')->name('update-user-email');

Route::get('/add-user', 'DashboardController@addUserProfileForm')->name('add-user');

Route::post('/create-user', 'DashboardController@createUser')->name('create-user');

Route::get('/add-school', 'SchoolController@addSchool')->name('add-school');

Route::post('/create-school', 'SchoolController@createSchool')->name('create-school');

Route::get('/school', 'SchoolController@listSchool')->name('list-school');

Route::get('/edit-school/{id}', 'SchoolController@editSchool')->name('edit-school');

Route::post('/update-school/{id}', 'SchoolController@updateSchool')->name('update-school');

Route::get('/add-board', 'BoardController@addBoard')->name('add-board');

Route::post('/create-board', 'BoardController@createBoard')->name('create-board');

Route::get('/board', 'BoardController@listBoard')->name('list-board');

Route::get('/delete-board/{id}', 'BoardController@deleteBoard')->name('delete-board');