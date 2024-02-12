<?php

use App\Http\Controllers\GroupA\GroupAAuthenticationController;
use App\Http\Controllers\GroupA\GroupARegistrationController;
use App\Http\Controllers\GroupB\GroupBAuthenticationController;
use App\Http\Controllers\GroupB\GroupBRegistrationController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/group-a/register', [GroupARegistrationController::class, 'create'])->name('a.register');
    Route::post('/group-a/register', [GroupARegistrationController::class, 'store']);
    Route::get('/group-a/login', [GroupAAuthenticationController::class, 'create'])->name('a.login');
    Route::post('/group-a/login', [GroupAAuthenticationController::class, 'store']);
    Route::get('/group-b/register', [GroupBRegistrationController::class, 'create'])->name('b.register');
    Route::post('/group-b/register', [GroupBRegistrationController::class, 'store']);
    Route::get('/group-b/login', [GroupBAuthenticationController::class, 'create'])->name('b.login');
    Route::post('/group-b/login', [GroupBAuthenticationController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [GroupAAuthenticationController::class, 'destroy'])->name('logout');
});
