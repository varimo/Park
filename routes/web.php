<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/price', function () {
    return view('price');
})->name('price');

Route::get('/operating-mode', function () {
    return view('operatingMode');
})->name('operating-mode');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/news', 'App\Http\Controllers\NewsController@allNews')->name('news');

Route::post('/feedback-send', 'App\Http\Controllers\FeedbackController@submit')->name('feedback-form');

  
