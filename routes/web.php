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
Route::group(['prefix' => 'content','middleware' => 'auth'], function() {
    Route::get('history/create', 'Content\HistoryController@add');
    Route::get('kitahirosima/create','Content\KitahirosimaController@add');
    Route::get('realtime/create','Content\RealtimeController@add');
    Route::post('history/create','Content\HistoryController@create');
    Route::post('kitahirosima/create','Content\KitahirosimaController@create');
    Route::post('realtime/create','Content\RealtimeController@create');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
