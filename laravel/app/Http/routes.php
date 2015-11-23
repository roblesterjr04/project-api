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

Route::get('/', 'IndexController@index');
Route::get('updates', 'IndexController@index');

// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Users Routes...
Route::get('users', 'UsersController@index');
Route::get('users/create', 'UsersController@create');
Route::get('users/{id}', 'UsersController@edit');
Route::post('users/create', 'UsersController@store');
Route::post('users/{id}', 'UsersController@update');
Route::delete('users/{id}', 'UsersController@destroy');

// Application Routes...

Route::get('apps', 'ApplicationsController@index');
