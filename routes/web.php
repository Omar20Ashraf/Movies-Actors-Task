<?php

Route::get('/', function () {
    return view('welcome');
});

//movies routes
Route::resource('movies','MoviesCtrl');

//get actor details
Route::get('/actors/{id}', 'ActorsCtrl@actorDetails')->name('actorDetails');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
