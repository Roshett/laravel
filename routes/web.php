<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index_one');
});
Route::get('/csgo', function(){
	return view('index_one');
});
Route::get('dota', function(){
	return view('index_two');
});
Route::get('agreements',function(){
	return view('agreements');
});

Route::get('login', 'AuthController@login')->name('login');

Route::get('exit', function(){
	Auth::logout();
	return view('index_one');
});

