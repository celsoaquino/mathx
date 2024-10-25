<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::post('/generate', [MainController::class, 'generateExercises'])->name('generate');
Route::get('/print', [MainController::class, 'printExercises'])->name('print');
Route::get('/export', [MainController::class, 'exportExercises'])->name('export');
