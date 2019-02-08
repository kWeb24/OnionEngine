<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Auth::routes(['verify' => true]);
// Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => 'auth'], function() {
  Route::get('/test', 'kweber\OnionEngine\App\Http\Controllers\AdminController@index')->name('test');
// });

// Route::group(['middleware' => ['role:super-admin']], function() {
// });
