<?php
use App\Post;
use App\Http\Resources\PostCollection as PostCollection;
use Yajra\Datatables\Datatables;

//Route::get('/', 'UsersController@index')->name('users.index');

Route::get('/data', function () {
    $posts = Post::with('user')->get();
    $data = new PostCollection($posts);
    return Datatables::of($data);
})->name('data');


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
    Route::get('/datatables', 'PostsController@postsDataTables')->name('posts.datatables');
});
