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



Route::get('users', 'UsersController@index')->name('users');


Route::get('datas', 'UsersController@data')->name('datas');



Route::get('create', 'DisplayDataController@create');
Route::get('index', 'DisplayDataController@index');
