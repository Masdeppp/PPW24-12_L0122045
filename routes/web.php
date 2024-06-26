<?php

use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);

