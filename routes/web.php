<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Main page route
Route::get('/', [BookController::class, 'index'])->name('books.index');

// Resource route for books
Route::resource('books', BookController::class);
