<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/books', [BookController::class, 'index'])->name('books');
Route::delete('books/destroy/{book}', [BookController::class, 'destroy'])->name('books.destroy');
