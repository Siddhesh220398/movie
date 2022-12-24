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


Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    Route::group(['middleware' => 'auth'], function () {

        Route::get('/home', 'Backend\HomeController@index')->name('home');
        Route::name('home.')->group(function () {
            Route::get('/change-multiple-status', 'Backend\HomeController@changeMultipleStatus')->name('change-multiple-status');
            Route::get('/delete-multiple', 'Backend\HomeController@deleteMultiple')->name('delete-multiple');
        });
//User
        Route::resource('user', 'Backend\UserController');

//year
        Route::resource('year', 'Backend\YearController');

//genre
        Route::resource('genre', 'Backend\GenreController');

//type
        Route::resource('type', 'Backend\TypeController');

//movie

Route::resource('movie', 'Backend\MovieController');

//continue watching
    Route::resource('watching', 'Backend\WatchingController');


});

