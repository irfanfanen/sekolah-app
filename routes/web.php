<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\EvaluasiController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('siswa', SiswaController::class);

Route::resource('guru', GuruController::class);

Route::resource('kelas', KelasController::class);

Route::resource('mata-pelajaran', MataPelajaranController::class);

Route::resource('nilai', NilaiController::class);

Route::get('/evaluasi/peringkat-siswa', [EvaluasiController::class, 'peringkatSiswa'])->name('evaluasi.peringkat');
Route::get('/evaluasi/siswa-perhatian', [EvaluasiController::class, 'siswaPerluPerhatian'])->name('evaluasi.perhatian');
