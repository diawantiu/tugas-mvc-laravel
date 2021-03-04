<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('home', 'HomeController@home');

Route::get('register', 'AuthController@register');

Route::get('welcomee', 'AuthController@welcomee');

Route::get('table', 'TableController@table');

Route::get('datatables', 'DatatablesController@datatables');

Route::get('master', function() {
    return view('master');
});



