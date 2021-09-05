<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Welcome page
Route::get('/', function () {
    return view('auth.index');
})->name('welcome');

// Sign up page
Route::get('/sign-up', [SignupController::class, 'index'])->name('signup');
Route::post('/sign-up', [SignupController::class, 'store']);

// Log in page
Route::get('/log-in', [LoginController::class, 'index'])->name('login');
Route::post('/log-in', [LoginController::class, 'store']);

// Log out function
Route::post('/log-out', [LogoutController::class, 'store'])->name('logout');

// Dashboard page
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
