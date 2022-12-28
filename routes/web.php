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

//Route::get('/', function () {
//    return view('front-main');
//});
Route::get('/', 'Frontend\HomeController@home');
Route::get('/login', 'Frontend\HomeController@login')->name('user.login');
Route::get('/register', 'Frontend\HomeController@register')->name('user.register');

Route::get('tv-series', 'Frontend\TvseriesController@index')->name('tvseries');
Route::get('movie', 'Frontend\MovieController@index')->name('movieindex');
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/home', 'Backend\HomeController@index')->name('home');
        Route::name('home.')->group(function () {
            Route::get('/change-multiple-status', 'Backend\HomeController@changeMultipleStatus')->name('change-multiple-status');
            Route::get('/delete-multiple', 'Backend\HomeController@deleteMultiple')->name('delete-multiple');
        });

        Route::resource('user', 'Backend\UserController');
        Route::resource('year', 'Backend\YearController');
        Route::resource('genre', 'Backend\GenreController');
        Route::resource('type', 'Backend\TypeController');
        Route::resource('movie', 'Backend\MovieController');
        Route::resource('web-series', 'Backend\WebSeriesController');
        Route::get('setting', 'Backend\SettingController@setting')->name('setting.index');
        Route::put('setting/update/{id}', 'Backend\SettingController@update')->name('setting.update');
        Route::resource('banner', 'Backend\BannerController');
    });
});

