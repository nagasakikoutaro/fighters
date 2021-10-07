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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'content','middleware' => 'auth'], function() {
    Route::get('history/create', 'Content\HistoryController@add');
    Route::get('kitahirosima/create','Content\KitahirosimaController@add');
    Route::get('realtime/create','Content\RealtimeController@add');
    Route::post('history/create','Content\HistoryController@create');
    Route::post('kitahirosima/create','Content\KitahirosimaController@create');
    Route::post('realtime/create','Content\RealtimeController@create');
    Route::get('history','Content\HistoryController@index');
    Route::get('kitahirosima','Content\KitahirosimaController@index');
    Route::get('edit','Content\KitahirosimaController@edit');
    Route::post('edit','Content\KitahirosimaController@update');
    Route::get('Content/edit', 'Content\HistoryController@edit');
    Route::post('Content/edit', 'Content\HistoryController@update');
    Route::get('coment/create', 'Content\ComentController@add');
    Route::get('todaycoment/create', 'Content\TodayplayercomentController@add');
    Route::get('expectcoment/create', 'Content\ExpectplayercomentController@add');
});
Route::group(['middleware' => 'auth'], function() {
 Route::get('content/favorite/vote','Content\FavoriteController@add');
    Route::post('favorite/vote','Content\FavoriteController@vote');
    Route::get('favorite/result','Content\FavoriteController@result');
    
});

Auth::routes();

