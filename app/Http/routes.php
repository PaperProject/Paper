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
Route::get('/', ['uses' => 'Main\HomeController@index', 'as' => 'home']);
Route::controller('auth', 'Auth\AuthController');
//Route::get('users', 'UsersController@getInfos');
//Route::post('users', 'UsersController@postInfos');
//Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');
//Request::input('nom');
//Route::controller('users', 'UsersController');
