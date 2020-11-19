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

// Laravel File Manager
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

// FrontEnd
Route::get('/', 'FrontEndController@index')->name('blog.index');
Route::get('/page/{slug}', 'FrontEndController@show')->name('blog.show');
Route::get('/list', 'FrontEndController@list')->name('blog.list');
Route::get('/kategori/{category}', 'FrontEndController@listCategory')->name('blog.category');
Route::get('/blog-tag/{tag}', 'FrontEndController@listTag')->name('blog.tag');
Route::get('/cari', 'FrontEndController@searchPost')->name('blog.search');
// Auth
Auth::routes();
Route::get('/login-aja', 'Auth\LoginController@showLoginForm');
Route::group(['middleware' => ['auth']], function () {
    // Redirect after login
    Route::get('/home', 'HomeController@index')->name('home');
    // CRUD Category
    Route::resource('/category', 'CategoryController');
    // CRUD Post
    Route::get('/post/trash', 'PostController@showPostInTrash')->name('post.trash');
    Route::get('/post/restore/{id}', 'PostController@restorePostInTrash')->name('post.restore');
    Route::delete('/post/delete/{id}', 'PostController@deletePostInTrash')->name('post.force.delete');
    Route::resource('/post', 'PostController');
    // CRUD Tag
    Route::resource('/tag', 'TagController');
    // CRUD User
    Route::resource('user', 'UserController');
});