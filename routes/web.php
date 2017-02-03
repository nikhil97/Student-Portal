<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','PagesController@home');
Route::get('new','PagesController@new1');




Auth::routes();

Route::get('/home', 'HomeController@index');


// Routes for logged in user
Route::group(['middleware' => 'auth'], function () {
    Route::get('myprofile','UserController@index');
    Route::get('user/search','UserController@search');
    Route::get('user/edit','UserController@edit');
    Route::patch('user/updated','UserController@update');
    Route::get('/search','SearchController@search');
});

