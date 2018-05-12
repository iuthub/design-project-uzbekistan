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
Route::resource('posts','PostsController');
Route::get('/posts/{id}','PostsController@show');
Route::resource('/home','HomeController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
Route::get('/services/restaurant_reserving', 'PagesController@rest');
Route::get('/services/taxi_order', 'PagesController@taxi');
Route::get('/services/hotel_order', 'PagesController@hotel');
Route::resource('traditions', "TraditionsController");
Auth::routes();


