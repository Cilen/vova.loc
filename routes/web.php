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
Route::get('history', function () {
    return view('history');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('projects', function () {
    return view('projects');
});
Route::get('photo', function () {
    return view('photo');
});
Route::get('contacts', function () {
    return view('contacts');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
