<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/home', 'HomeController@dashboard')->name('home');
});

Route::group(['middleware' => ['web', 'auth', 'role:super-admin']], function () {
    Route::get('/admin', '\Kweber\OnionEngine\App\Http\Controllers\AdminController@index')->name('admin');
    Route::get('/admin/settings', '\Kweber\OnionEngine\App\Http\Controllers\AdminController@settings')->name('admin.settings');
});
