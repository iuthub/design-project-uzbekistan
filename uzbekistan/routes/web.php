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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::resource('posts/edit','PostsController@edit');

Route::resource('/','PostsController');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');

Route::resource('traditions', "TraditionsController");
Auth::routes();

Route::resource('posts','PostsController');
