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

Route::get('/', 'HomeController@getIndex');
Route::get('/flames' , 'FlameController@getIndex');
Route::get('/slides' , 'SlideController@getIndex');
Route::get('/flametypes' , 'FlameTypeController@getIndex');
Route::get('/champions' , 'ChampionController@getIndex');
Route::get('/upload', 'UploadController@getIndex');

Route::get('/upload/file', 'UploadController@getFileUpload');

Route::get('/flame/add', ['middleware' => 'auth', 'uses' => 'FlameController@getAdd']);
Route::get('/flame/edit/{id}', ['middleware' => 'auth', 'uses' => 'FlameController@getEdit']);
Route::get('/flame/remove/{id}', ['middleware' => 'auth', 'uses' => 'FlameController@getRemove']);

Route::post('/flame/edit/{id}', ['middleware' => 'auth', 'uses' => 'FlameController@postEdit']);
Route::post('/flame/edit', ['middleware' => 'auth', 'uses' => 'FlameController@postEdit']);



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
