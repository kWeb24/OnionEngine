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
  Route::get('/admin', 'kweber\OnionEngine\App\Http\Controllers\AdminController@index')->name('admin');
// });

// Route::group(['middleware' => ['role:super-admin']], function() {
// });
