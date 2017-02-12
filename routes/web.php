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

Route::get('/','HomeController@index');

Route::get('/about','HomeController@about');
Route::get('/contact','HomeController@contact');
Route::get('/choose_sim','HomeController@choose');
Route::get('/get_sim','HomeController@getsim');
Route::get('/user_details','HomeController@details');


Auth::routes();
