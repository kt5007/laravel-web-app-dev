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

// バインド前は57　→ バインド後58
// 下にmyNameが追加
Route::get('/', function () {
    dd(app());
    app()->bind('myName',function(){
        return 'kenjin';
    });
    // dd(app());
    $name = app()->make('myName');
    dd($name);
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/auth/register', 'Auth\RegisterController@register');

Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::post('/auth/login', 'Auth\LoginController@login');

Route::post('/auth/logout', 'Auth\LoginController@logout');