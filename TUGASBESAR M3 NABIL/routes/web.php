<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;



// Modul A (Nabil)
Route::get('/', [BukuController::class, 'index'])->name('buku.index');

// Modul A (Nabil)
Route::get('/buku/tambah', [BukuController::class, 'create'])->name('buku.create');

// Modul A (Nabil)
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');