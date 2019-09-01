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
    return view('welcome');
});

Route::get('/user/input', function () {
    return view('user.input');
});

Route::post('/user/confirm', 'UserController@confirm');
Route::post('/user/complete', 'UserController@complete');
