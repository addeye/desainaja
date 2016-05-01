<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login','LogwebController@login');
Route::post('/login','LogwebController@ceklogin');
Route::get('/logout','LogwebController@logout');

Route::resource('user','UserController');

Route::group(['middleware' => 'auth'], function () {
    Route::get('user/', function ()    {
        return view('home');
    });

    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });
});