<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('movies', 'MovieController@index')->name('movies');
Route::get('movie/{id}', 'MovieController@show')->name('movie.show');
Route::get('mongas', 'MongaController@index')->name('mongas');
Route::get('monga/{id}', 'MongaController@show')->name('monga.show');

Route::group([ 'prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin' ], function() {
    Route::get('/', 'DashboardController@index');
    Route::resource('movie', 'MovieController');
    Route::resource('monga', 'MongaController');
    Route::resource('monga/{monga_id}/page', 'MongaPageController');
});