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
    if (Auth::check()) {
            return redirect('/home');
    }

    return view('welcome');
});

Auth::routes(); // todo: q

Route::get('/home', 'HomeController@index');
Route::post('/save', 'WorkoutController@save');
Route::get('/remove/{item_id}', 'WorkoutController@remove');
