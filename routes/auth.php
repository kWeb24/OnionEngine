<?php

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', ['uses' => '\App\Http\Controllers\Auth\LoginController@showOnionEngineLoginForm', 'as' => 'login']);
Route::get('/register', ['uses' => '\App\Http\Controllers\Auth\RegisterController@showOnionEngineRegistrationForm', 'as' => 'register']);
