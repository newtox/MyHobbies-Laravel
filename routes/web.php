<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('startseite');
});

Route::get('/info', function () {
    return view('info');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('hobby', App\Http\Controllers\HobbyController::class);

Route::resource('tag', App\Http\Controllers\TagController::class);

Route::resource('user', App\Http\Controllers\UserController::class);
