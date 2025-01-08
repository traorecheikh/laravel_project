<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('index')->middleware('guest');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::any('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::any('/register', [UserController::class, 'register'])->name('register')->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/admin/users', [UserController::class, 'manageUser'])->name('manage-user')->middleware('auth');
Route::get('/admin/books', [UserController::class, 'manageBook'])->name('manage-book')->middleware('auth');
Route::any('/admin/books/create', [UserController::class, 'createBook'])->name('books.create')->middleware('auth');
