<?php

use App\Http\Controllers\HeladeriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HeladeriaController::class, 'index'])->name('inicio');
Route::get('/heladeria', [HeladeriaController::class, 'index'])->name('heladeria');