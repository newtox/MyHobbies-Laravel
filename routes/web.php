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

Route::get('/hobby/tag/{tag_id}', [App\Http\Controllers\HobbyTagController::class, 'getFilteredHobbies'])->name('hobby_tag');

Route::get('/hobby/{hobby_id}/tag/{tag_id}/attach', [App\Http\Controllers\HobbyTagController::class, 'attachTag'])->name('hobby_tag_attach');

Route::get('/hobby/{hobby_id}/tag/{tag_id}/detach', [App\Http\Controllers\HobbyTagController::class, 'detachTag'])->name('hobby_tag_detach');
