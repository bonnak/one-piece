<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('movies', 'MovieController@index')->name('movies');
Route::get('movie/{id}', 'MovieController@show')->name('movie.show');
