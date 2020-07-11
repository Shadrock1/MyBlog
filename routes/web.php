<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', 'PostController');

Route::resource('/', 'WelcomeController');

Route::get('/search', 'ApiSearchController@search');
Route::post('/search', 'ApiSearchController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');
