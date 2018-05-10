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
Route::get('/','PostsController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Auth::routes();
Route::get('/dashboard', 'DashboardController@show');

Route::resource('traditions', "TraditionsController");
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts','PostsController');