<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['web', 'auth', /*'role:super-admin'*/]], function() {
  Route::get('/admin', 'kweber\OnionEngine\App\Http\Controllers\AdminController@index')->name('admin');
});
