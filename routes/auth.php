<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegistrationController::class, 'create'])->name('register');
    Route::post('register', [RegistrationController::class, 'store']);
    Route::get('login', [AuthenticationController::class, 'create'])->name('login');
    Route::post('login', [AuthenticationController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticationController::class, 'destroy'])->name('logout');
});
