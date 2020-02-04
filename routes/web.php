<?php

Route::get('/', function () {
    return view('welcome');
});

//get all the movies
Route::get('/movies', 'PagesCtrl@movies')->name('movies');

//add new movie
Route::post('/movies', 'PagesCtrl@addMovie')->name('addMovie')->middleware('auth');

//get movie details
Route::get('/movies/{id}', 'PagesCtrl@movieDetails')->name('movieDetails');

//get actor details
Route::get('/actors/{id}', 'PagesCtrl@actorDetails')->name('actorDetails');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
