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

Route::get('user/signup', 'User\UserController@signup');
Route::get('user/signin', 'User\UserController@signin');

Route::get('home', 'home\UserController@signup');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user','User\UserController');
