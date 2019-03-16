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

    Route::post('/admin/settings/general/save', '\Kweber\OnionEngine\App\Http\Controllers\SettingController@saveGeneral')->name('admin.settings.general.save');
    Route::post('/admin/settings/general/users/save', '\Kweber\OnionEngine\App\Http\Controllers\SettingController@saveUserGeneral')->name('admin.settings.general.user.save');
    Route::get('/admin/settings/cache/clear', '\Kweber\OnionEngine\App\Http\Controllers\SettingController@cacheClear')->name('admin.settings.cache.clear');
    Route::get('/admin/settings/cache/view/clear', '\Kweber\OnionEngine\App\Http\Controllers\SettingController@cacheClearView')->name('admin.settings.cache.view.clear');
    Route::get('/admin/settings/cache/route/clear', '\Kweber\OnionEngine\App\Http\Controllers\SettingController@cacheClearRoute')->name('admin.settings.cache.route.clear');
    Route::get('/admin/settings/cache/all/clear', '\Kweber\OnionEngine\App\Http\Controllers\SettingController@cacheClearAll')->name('admin.settings.cache.all.clear');
    Route::get('/admin/settings/cache/config/clear', '\Kweber\OnionEngine\App\Http\Controllers\SettingController@cacheClearConfig')->name('admin.settings.cache.config.clear');
    Route::get('/admin/settings/cache/classloader/optimize', '\Kweber\OnionEngine\App\Http\Controllers\SettingController@optimizeClassLoader')->name('admin.settings.cache.classloader.optimize');

    Route::get('/admin/pages/add', '\Kweber\OnionEngine\App\Http\Controllers\PageController@addPage')->name('admin.pages.add');
});
