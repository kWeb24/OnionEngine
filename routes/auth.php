<?php

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', ['uses' => '\App\Http\Controllers\Auth\LoginController@showOnionEngineLoginForm', 'as' => 'login']);
