<?php

use App\Http\Resources\Post as PostResource;
//Route::get('/', 'UsersController@index')->name('users.index');

Route::get('/', function (){
    $posts = App\Post::with('user')->get();

    return new PostResource::collection($posts);
});


Route::get('/users', 'UsersController@index')->name('users.index');

Route::get('/users-datatables', 'UsersController@usersDataTables')->name('users.datatables');

Route::prefix('posts')->group(function () {
    Route::get('/', 'PostsController@index')->name('posts.index');
    Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
    Route::get('/list', 'PostsController@list')->name('posts.list');
    Route::get('/create', 'PostsController@create')->name('posts.create');
    Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
    Route::post('/', 'PostsController@store')->name('posts.store');
    Route::put('/{post}/update', 'PostsController@update')->name('posts.update');
    Route::get('/{post}/delete', 'PostsController@delete')->name('posts.delete');
    Route::get('/posts-datatables', 'PostsController@postsDataTables')->name('posts.datatables');
});
