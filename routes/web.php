<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function () {
    Route::resource('books', BookController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


