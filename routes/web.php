<?php

use App\Http\Controllers\LuasPermukaanKubusController;
use App\Http\Controllers\LuasPermukaanTabungController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\PersertaController;
use App\Http\Controllers\VolumeKubusController;
use App\Http\Controllers\VolumeTabungController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('navbar', function () {
    return view('inc.navbar');
});

// --- PERHITUNGAN ---
// Ubah ke Controller agar konsisten
Route::get('perhitungan', [PerhitunganController::class, 'index'])->name('perhitungan.index');
// Hapus function() {} di sini karena sudah ada PerhitunganController::class
Route::post('perhitungan', [PerhitunganController::class, 'store'])->name('perhitungan.store');


Route::get('/kubus', [LuasPermukaanKubusController::class, 'index'])
    ->name('kubus.index');

Route::post('/kubus', [LuasPermukaanKubusController::class, 'store'])
    ->name('kubus.store');

Route::get('/vkubus', [VolumeKubusController::class, 'index'])
    ->name('vkubus.index');

Route::post('/vkubus', [VolumeKubusController::class, 'store'])
    ->name('vkubus.store');

Route::get('/lptabung', [LuasPermukaanTabungController::class, 'index'])
    ->name('lptabung.index');

Route::post('/lptabung', [LuasPermukaanTabungController::class, 'store'])
    ->name('lptabung.store');

Route::get('/vtabung', [VolumeTabungController::class, 'index'])
    ->name('vtabung.index');

Route::post('/vtabung', [VolumeTabungController::class, 'store'])
    ->name('vtabung.store');


// Route::get('/volumelimas', [App\Http\Controllers\VolumeLimasController::class, 'index'])
//     ->name('volumelimas.index');

// Route::get('/volumelimas/create', [App\Http\Controllers\VolumeLimasController::class, 'create'])
//     ->name('volumelimas.create');

// Route::post('/volumelimas/store', [App\Http\Controllers\VolumeLimasController::class, 'store'])
//     ->name('volumelimas.store');

// Route::get('/volumelimas/edit{id}', [App\Http\Controllers\VolumeLimasController::class, 'edit'])
//     ->name('volumelimas.edit');

// // Tambahkan ini di bawah route edit kamu
// Route::put('/volumelimas/update/{id}', [App\Http\Controllers\VolumeLimasController::class, 'update'])
//     ->name('volumelimas.update');

// Route::delete('/volumelimas/destroy/{id}', [App\Http\Controllers\VolumeLimasController::class, 'destroy'])->name('volumelimas.destroy');
Route::resource('volumelimas', App\Http\Controllers\VolumeLimasController::class);

// Jika di navbar pakai route('perserta.index')
Route::resource('perserta', PersertaController::class);
