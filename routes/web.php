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

Route::get('/{project}/todo-list', 'TaskController@index');
Route::post('/{project}/insert-list', 'TaskController@store');
Route::get('/{project}/update-list', 'TaskController@update');