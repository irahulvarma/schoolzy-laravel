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

Route::get('/user-profile', 'DashboardController@editProfile')->name('user-profile');

Route::post('/update-user-profile', 'DashboardController@updateProfile')->name('update-user-profile');

Route::get('/users', 'DashboardController@users')->name('users');