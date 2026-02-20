<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookEditController;
use App\Http\Controllers\BookDeleteController;

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
});

Route::middleware('auth')->prefix('book')->group(function () {
    Route::view('/', 'book')->name('book');
    Route::view('/register', 'book_register')->name('return.book-register');
    Route::get('/{book}/edit', [BookEditController::class, 'edit'])->name('return.book-edit');
    Route::get('{book}/delete', [BookDeleteController::class, 'ReturnDelete'])->name('return.book-delete');

    Route::post('/register', [BookController::class, 'register'])->name('register.book');
    Route::put('/{book}/edit', [BookEditController::class, 'edit_put'])->name('edit.book');
    Route::delete('/{book}/delete', [BookDeleteController::class, 'Delete'])->name('delete.book');
});

require __DIR__.'/settings.php';
