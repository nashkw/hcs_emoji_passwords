<?php

use App\Http\Controllers\RecallController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () { return Inertia::render('Welcome'); })->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/intermediary', function () { return Inertia::render('RoundOne/Distraction'); })->name('distraction');
    Route::get('/remember', [RecallController::class, 'create'])->name('remember');
    Route::post('/remember', [RecallController::class, 'store']);
    Route::get('/complete-round-one', function () { return Inertia::render('RoundOne/FirstComplete'); })->name('complete1');
    Route::get('/complete-round-two', function () { return Inertia::render('RoundTwo/SecondComplete'); })->name('complete2');
});

require __DIR__.'/auth.php';
