<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Auth
Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'loginVerify'])->name('login-verify');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'registerVerify'])->name('registerVerify');
    Route::post('signOut', [AuthController::class, 'signOut'])->name('sign-out');
});

// Protected
Route::middleware('auth')->group(function () {
    Route::get('usernavbar', function () {
        return view('users.usernavbar');
    })->name('usernavbar');
});