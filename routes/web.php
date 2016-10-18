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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artists', 'ArtistController@index');
Route::post('/artist/create', 'ArtistController@create');
Route::get('/artist/{id}', 'ArtistController@getArtist');
Route::post('/artist/{id}/update', 'ArtistController@update');