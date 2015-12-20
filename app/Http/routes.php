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
    return view('welcome');
});

Route::get('foo/bar', function()
{
    return 'Hello World';
});

Route::get('additem','ItemsController@add');
Route::post('additem','ItemController@save');
Route::post('get_parameters','ParametersController@get');
Route::post('save_parameters','ParametersController@save');