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
Route::get('/', function () {
    return view('front-main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::name('home.')->group(function () {
    Route::get('/change-multiple-status', 'HomeController@changeMultipleStatus')->name('change-multiple-status');
    Route::get('/delete-multiple', 'HomeController@deleteMultiple')->name('delete-multiple');
});

Route::group(['middleware' => 'auth'], function (){
//User
Route::resource('user','UserController');

//year
Route::resource('year','Backend\YearController');

//genre
Route::resource('genre','Backend\GenreController');

//type
Route::resource('type','Backend\TypeController');

//movie
Route::resource('movie','Backend\MovieController');
});
