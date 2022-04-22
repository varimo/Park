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

Route::middleware("auth")->group(function () {
    Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
});

Route::middleware("guest")->group(function () {
    Route::get('/register', 'App\Http\Controllers\AuthController@showRegisterForm')->name('register');
    Route::post('/register_process', 'App\Http\Controllers\AuthController@register')->name('register_process');
    Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');
    Route::post('/login_process', 'App\Http\Controllers\AuthController@login')->name('login_process');
    Route::get('/forgot', 'App\Http\Controllers\AuthController@showForgotForm')->name('forgot');
    Route::post('/forgot_process', 'App\Http\Controllers\AuthController@forgot')->name('forgot_process');
});

Route::get('/contacts', 'App\Http\Controllers\MailFormController@showContactForm')->name('contacts');
Route::post('/contact_form_process', 'App\Http\Controllers\MailFormController@contactForm')->name('contact_form_process');





