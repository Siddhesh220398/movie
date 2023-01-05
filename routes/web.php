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
Route::get('myprofile','Frontend\HomeController@profile')->name('user.profile');
Route::post('update-profile','Frontend\HomeController@updateProfile')->name('user.update-profile');


Route::get('filter','Frontend\HomeController@movieList')->name('title');
Route::get('movies/{type}/{name}','Frontend\HomeController@singleMovie')->name('singleMovie');
Route::get('movies/{type}/{name}/{season}','Frontend\HomeController@singleSeason')->name('singleSeason');
Route::post('movies/comments','Frontend\HomeController@comments')->name('movie.comment');
Route::post('movies/like','Frontend\HomeController@like')->name('movie.like');
Route::get('movie/{type}/{name}/play','Frontend\HomeController@play')->name('movie.play');
Route::post('season/episode','Frontend\HomeController@episode')->name('season.episode');


// Route::get('tv-series', 'Frontend\TvseriesController@index')->name('tvseries');
// Route::get('movie', 'Frontend\MovieController@index')->name('movieindex');

Route::group(['middleware' => 'auth'], function () {
    Route::get('user/watchlist','Frontend\HomeController@watchlist')->name('watchlist.index');
    Route::post('user/watchlist','Frontend\HomeController@watchlistStore')->name('movie.watchList');

});
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

        Route::any('web-series/episode','Backend\WebSeriesController@episode')->name('web-series.episode');
        Route::resource('episode','Backend\EpisodeController',['Except'=> ['index','create']]);
        Route::get('webseries/episode/{id}','Backend\EpisodeController@index')->name('webseries.episodes');
        Route::get('webseries/episode/create/{id}','Backend\EpisodeController@create')->name('webseries.episode.create');

    });
});

