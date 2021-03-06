<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\EmployeeController;
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
Route::get('/employee', [EmployeeController::class, 'index'])->name('dashboard');

// Employee Info
// create employee function
Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.create');
// delete employee function
Route::delete('/employee/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');

