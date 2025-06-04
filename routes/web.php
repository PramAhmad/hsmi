<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/activities', [HomeController::class, 'activities'])->name('activities');
Route::get('/menfess', [HomeController::class, 'menfess'])->name('menfess');
Route::get('/journals', [HomeController::class, 'journals'])->name('journals');
Route::get('/bank-materi', [HomeController::class, 'bankMateri'])->name('bank-materi');
