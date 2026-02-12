<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/home', function () {
    return redirect()->route('mypage');
});

Route::get('/', function () {
    return Auth::check() //認証済みか？
        ? redirect()->route('mypage') //真
        : redirect()->route('login'); //偽
})->name('home');

Route::middleware('auth')->prefix('mypage')->group(function () {
    Route::view('/', 'mypage')->name('mypage');
    Route::view('/logout', 'logout')->name('mypage.logout');
});

require __DIR__.'/settings.php';
