<?php

Route::get('/', 'UsersController@index')->name('users.index');

Route::get('/users', 'UsersController@index')->name('users.index');

Route::get('/users-datatables', 'UsersController@usersDataTables')->name('users.datatables');
