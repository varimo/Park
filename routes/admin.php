<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::middleware("guest:admin")->group(function () {
    Route::get('login', 'App\Http\Controllers\Admin\AuthController@index')->name('login');
    Route::post('login_process', 'App\Http\Controllers\Admin\AuthController@login')->name('login_process');
});

Route::middleware("auth:admin")->group(function () {
    Route::get('logout', 'App\Http\Controllers\Admin\AuthController@logout')->name('logout');
    Route::resource('news', App\Http\Controllers\Admin\NewController::class);
    Route::resource('gallery', App\Http\Controllers\Admin\GalleryController::class);
});
  
