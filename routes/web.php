<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::post('/generate', [MainController::class, 'generateExercises'])->name('generateExercises');
Route::get('/print', [MainController::class, 'printExercises'])->name('printExercises');
Route::get('/export', [MainController::class, 'exportExercises'])->name('exportExercises');
