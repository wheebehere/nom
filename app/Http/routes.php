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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/chores', 'ChoreController@chores');

Route::get('/createchores', 'CreateController@gotorightform');

// Route::get('/familycalendar', function () {
//     return view('familycalendar');
// });

// Route::get('/useroverview', function () {
//     return view('useroverview');
// });

// Route::get('/familymessagectr', function () {
//     return view('familymessagectr');
// });

// Route::get('/todolist', function () {
//     return view('todolist');
// });

//Route::get('/home', 'HomeController@index');