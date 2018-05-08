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
    return view('index');
});

Route::get('/taxi', function () {
    return view('taxi_order');
});

Route::get('/hotel', function () {
    return view('hotel_order');
});

Route::get('/cuisine', function () {
    return view('cuisine');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/holidays', function () {
    return view('holidays');
});

Route::get('/music', function () {
    return view('music');
});

Route::get('/sport', function () {
    return view('sport');
});

Route::get('/content', function () {
    return view('content');
});

Route::get('/greathistory', function () {
    return view('greathistory');
});
