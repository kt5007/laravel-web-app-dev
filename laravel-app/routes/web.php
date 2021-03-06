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
    $view = view('welcome');
    Event::dispatch(new \App\Events\PublishProcessor(1));
    return $view;
});

Route::get('/author', 'AuthorController@index');
Route::get('/pdf', 'PdfGeneratorController@index');

Route::get('/auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/auth/register', 'Auth\RegisterController@register');

Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::post('/auth/login', 'Auth\LoginController@login');

Route::post('/auth/logout', 'Auth\LoginController@logout');

Route::get('/test_middleware/index', 'testMiddlewareController@index');
Route::post('/test_middleware/post', 'testMiddlewareController@post');

Route::post('/action/favorite','FavoriteActionController@switchFavorite');