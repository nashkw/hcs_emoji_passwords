<?php

use App\Http\Controllers\GroupA\GroupARecallController;
use App\Http\Controllers\GroupB\GroupBRecallController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () { return Inertia::render('Welcome'); })->name('welcome');
Route::get('/select-path', function () { return Inertia::render('PathSelection'); })->name('select');

Route::middleware('auth')->group(function () {
    Route::get('/group-a/intermediary', function () { return Inertia::render('GroupA/RoundOne/Distraction'); })->name('a.distraction');
    Route::get('/group-a/remember', [GroupARecallController::class, 'create'])->name('a.remember');
    Route::post('/group-a/remember', [GroupARecallController::class, 'store']);
    Route::get('/group-a/complete-round-one', function () { return Inertia::render('GroupA/RoundOne/FirstComplete'); })->name('a.complete1');
    Route::get('/group-a/complete-round-two', function () { return Inertia::render('GroupA/RoundTwo/SecondComplete'); })->name('a.complete2');
});

Route::middleware('auth')->group(function () {
    Route::get('/group-b/intermediary', function () { return Inertia::render('GroupB/RoundOne/Distraction'); })->name('b.distraction');
    Route::get('/group-b/remember', [GroupBRecallController::class, 'create'])->name('b.remember');
    Route::post('/group-b/remember', [GroupBRecallController::class, 'store']);
    Route::get('/group-b/complete-round-one', function () { return Inertia::render('GroupB/RoundOne/FirstComplete'); })->name('b.complete1');
    Route::get('/group-b/complete-round-two', function () { return Inertia::render('GroupB/RoundTwo/SecondComplete'); })->name('b.complete2');
});

require __DIR__.'/auth.php';
