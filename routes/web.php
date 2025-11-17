<?php
use App\Http\Controllers\SiswaController; 
use App\Http\Controllers\GuruController; 
use App\Http\Controllers\MapelController; 
use App\Http\Controllers\JurusanController; 
use App\Http\Controllers\KelasController; 

Route::get('/', function () {
    return view('index');
});
Route::resource('siswa', SiswaController::class);
Route::resource('guru', GuruController::class);
Route::resource('kelas', KelasController::class);
Route::resource('mapel', MapelController::class);
Route::resource('jurusan', JurusanController::class);
Route::get('siswa', [SiswaController::class, 'index']); 
Route::get('/siswa/tambah', [SiswaController::class, 'create'])->name('siswa.create'); 
Route::post('/siswa/tambah', [SiswaController::class, 'store'])->name('siswa.tambah.store');
Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index');