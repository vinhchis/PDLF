<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;


Route::get('/', function () {
    return view('welcome');
});

// Register
Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'store'])->name('register');

// Login
Route::get('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'store'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('home', [LoginController::class, 'home'])->name('home');

// Forget
Route::get('forget-password', [ForgotPasswordController::class, 'getEmail'])->name('password.request');
Route::post('forget-password', [ForgotPasswordController::class, 'postEmail'])->name('password.email');