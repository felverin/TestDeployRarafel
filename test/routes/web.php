<?php

use App\Http\Controllers\BioController;
use App\Models\Program;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BioController::class, 'home'])->name('home');
Route::get('/about', fn () => to_route('programs'))->name('about');
Route::get('/contact', [BioController::class, 'contact'])->name('contact');
Route::get('/programs', [ProgramController::class, 'index'])->name('programs');
Route::get('/programs/{code}', [ProgramController::class, 'show'])->name('programs.show');
