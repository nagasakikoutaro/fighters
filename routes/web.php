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

Route::group(['middleware' => 'auth'], function() {
Route::get('votepage/create','VotepageController@add');
Route::post('votepage/create','VotepageController@create');
Route::get('vote','VotepageController@show');
Route::post('vote','VoteController@vote');
Route::get('/','VotepageController@index');
Route::get('votepage/edit', 'VotepageController@edit'); 
Route::post('votepage/edit', 'VotepageController@update'); 
Route::get('votepage/delete', 'VotepageController@delete');
Route::get('vote/result', 'VoteController@result');
Route::get('vote/test', 'VotepageController@test');
});

Auth::routes();

