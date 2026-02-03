<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\AkreditasiController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KipController;




Route::get('/', [BerandaController::class, 'index'])->name('beranda');


Route::get('/profil', [ProfilController::class, 'index'])->name('profil');




// Pengumuman
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/pengumuman/{id}', [PengumumanController::class, 'show'])->name('pengumuman.show');

// Formulir Templates
Route::get('/formulir/formaktifkuliah', [FormulirController::class, 'aktifkuliah'])->name('formulir.aktifkuliah');
Route::get('/formulir/formpenelitian', [FormulirController::class, 'penelitian'])->name(name: 'formulir.formpenelitian');
Route::get('/formulir/ketlulus', [FormulirController::class, 'ketlulus'])->name('formulir.ketlulus');


Route::get('/formulir-templates/{id}/download', [FormulirController::class, 'download']);

// Akreditasi
Route::get('/akreditasi', [AkreditasiController::class, 'index'])->name('akreditasi');
//Route::get('/akreditasi/download', [AkreditasiController::class, 'download']);

Route::get('/kip', [KipController::class, 'index']);
