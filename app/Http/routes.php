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





Route::auth();
Route::get('checkAuth/','Auth\LoginController@index');
Route::get('/', 'IndexController@index');
Route::get('post/{id}', 'IndexController@show')->name('post');

Route::get('/home', 'HomeController@index');




Route::group(['middleware'=>'admin'], function (){

    Route::resource('admin/users', 'admin\UsersController');
    Route::resource('admin/posts', 'admin\PostController');
    Route::resource('admin/categories', 'admin\CategoriesController');

});



Route::resource('myprofile', 'userprofile\UserController');

Route::resource('myPosts', 'userprofile\PostController');
//Route::resource('', 'admin\CategoriesController');