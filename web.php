<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\InstrukturController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\DashboardController;

Route::resource('peserta', PesertaController::class);
Route::resource('instruktur', InstrukturController::class);
Route::resource('kelas', KelasController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
