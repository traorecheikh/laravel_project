<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('index')->middleware('guest');
Route::any('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::any('/register', [UserController::class, 'register'])->name('register')->middleware('guest');
