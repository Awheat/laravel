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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/life', function () {
    return view('life');
});

Route::get('/message', function () {
    return view('message');
});

Route::get('/about', function () {
    return view('about');
});

Route::post('addMessage', 'CommentController@addMessage');
Route::get('getMessages', 'CommentController@getMessages');
Route::get('ajaxJsonpCross', 'CommentController@ajaxJsonpCross');

