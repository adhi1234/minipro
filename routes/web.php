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

Route::get('/', function ()
 {
    return View::make('welcome');
});


Route::get('/about',function()
{
  return View::make('about');

});

Route::get('/contact',function()
{
  return View::make('contact');

});


Route::get('/choose_sim',function()
{
  return View::make('choose_sim');

});



Route::get('/get_sim',function()
{
  return View::make('get_sim');

});

Auth::routes();

Route::get('/home', 'HomeController@index');


//controller to be made below;
Route::get('/user_details',function()
{
  return View::make('user_details');
});
