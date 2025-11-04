<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextProcessorController;

Route::get('/', [TextProcessorController::class, 'index'])->name('text.index');
Route::post('/search', [TextProcessorController::class, 'search'])->name('text.search');
Route::post('/replace', [TextProcessorController::class, 'replace'])->name('text.replace');
Route::get('/sort', [TextProcessorController::class, 'sortWords'])->name('text.sort');