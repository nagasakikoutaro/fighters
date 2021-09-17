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
Route::group(['prefix' => 'admin'], function() {
    Route::get('history/create', 'Admin\HistoryController@add')->middleware('auth');
    Route::get('kitahirosima/create','Admin\KitahirosimaController@add')->middleware('auth');
    Route::get('realtime/create','Admin\RealtimeController@add')->middleware('auth');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
