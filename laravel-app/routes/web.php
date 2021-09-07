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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/chapter4', function () {
    return view('index');
});

Route::get('/chapter4/index', 'Chapter4Controller@index');
Route::get('/chapter4/register', 'Chapter4Controller@register');
Route::post('/chapter4/create', 'Chapter4Controller@create');

Route::get('/auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/auth/register', 'Auth\RegisterController@register');

Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::post('/auth/login', 'Auth\LoginController@login');

Route::post('/auth/logout', 'Auth\LoginController@logout');