<?php
// routes/web.php

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
