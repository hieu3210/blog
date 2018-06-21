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

Route::get('test', function(){
	return view('test');
});

Route::group(['middleware' => ['web']], function () {
	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle']);
	Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@getIndex']);
	Route::get('/', 'PagesController@getIndex');
	Route::get('about', 'PagesController@getAbout');
	Route::get('contact', 'PagesController@getContact');
	Route::resource('posts', 'PostController', ['middleware' => ['auth']]);
});

//Categories
Route::resource('categories', 'CategoryController', ['except' => ['create']]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
