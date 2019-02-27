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

Route::resource('room','RoomController');
Route::resource('person','PersonController');


//Route::get('add-room','RoomController@create');
//Route::post('add-room','RoomController@store');
//Route::put('/edit-room/{room}', 'RoomController@update');
//Route::delete('room/{room}', 'RoomController@destroy');
//Route::get('add-person','PersonController@create');
//Route::post('add-person','PersonController@store');
//Route::put('/edit-person/{person}', 'PersonController@update');
//Route::delete('person/{person}', 'PersonController@destroy');