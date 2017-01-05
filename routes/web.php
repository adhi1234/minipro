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
    return View::make('home');
});


Route::get('/about',function()
{
  return View::make('about');

});

Route::get('/contact',function()
{
  return View::make('contact');

});


Route::get('/joinus',function()
{
  return View::make('join');

});
