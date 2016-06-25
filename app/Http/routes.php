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

Route::resource('order','OrderController');

Route::group(['middleware' => 'auth'], function () {

    Route::get('adminweb/', function()
    {
        return view('admin.home');
    });

    Route::resource('user','UserController');
    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });
});

Route::get('produk',function(){
    return view('produk');
});
Route::get('keranjang', function(){
    return view('keranjang');
});
Route::get('desain',function(){
    return view('desain');
});
Route::get('kontak');

Route::get('cart', function(){
    Cart::add('1', 'Kaos1', 1, 9.99, array('size' => 'large'));
    Cart::add('2', 'Kaos2', 1, 9.99, array('size' => 'large'));
//    Cart::destroy();
    $result = Cart::content();
     return $result;
});