<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\MaskerController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\NilaiPesertaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert1', function () {
	return view('pertemuan1-intro');
});

Route::get('pert2', function () {
	return view('pertemuan2-news');
});

Route::get('pert2V2', function () {
	return view('pertemuan2-newsV2');
});

Route::get('pert3', function () {
	return view('pertemuan3-responsive');
});

Route::get('pert3t', function () {
	return view('pertemuan3tugas-contoh');
});

Route::get('pert4t', function () {
	return view('pertemuan4tugas-5026241027');
});

Route::get('pert5dell', function () {
	return view('pertemuan5-dell');
});

Route::get('pert5link', function () {
	return view('pertemuan5-linktree');
});

Route::get('menu', function () {
	return view('menu');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pengawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//route CRUD Belanja
Route::get('/belanja', [BelanjaController::class, 'index'])->name('keranjangbelanja.index');
Route::get('/belanja/create', [BelanjaController::class, 'create'])->name('keranjangbelanja.create');
Route::post('/belanja', [BelanjaController::class, 'store'])->name('keranjangbelanja.store');
Route::delete('/belanja/{id}', [BelanjaController::class, 'destroy'])->name('keranjangbelanja.destroy');

//Route crud masker
Route::get('/masker', [MaskerController::class, 'index'])->name('masker.index');
Route::get('/masker/tambah', [MaskerController::class, 'tambah'])->name('masker.tambah');
Route::post('/masker/store', [MaskerController::class, 'store'])->name('masker.store');
Route::get('/masker/{kode}/edit', [MaskerController::class, 'edit'])->name('masker.edit');
Route::post('/masker/update', [MaskerController::class, 'update'])->name('masker.update');
Route::get('/masker/{kode}/hapus', [MaskerController::class, 'hapus'])->name('masker.hapus');
Route::get('/masker/cari', [MaskerController::class, 'cari'])->name('masker.cari');

//Route crud Nilai
Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
Route::get('/nilai/create', [NilaiController::class, 'create'])->name('nilai.create');
Route::post('/nilai', [NilaiController::class, 'store'])->name('nilai.store');

//Route crud Nilai_Peserta EAS
Route::get('/eas', [NilaiPesertaController::class, 'index'])->name('npeas.eas');
Route::get('/eas/tambah', [NilaiPesertaController::class, 'create'])->name('npeas.eastambah');
Route::post('/eas', [NilaiPesertaController::class, 'store'])->name('npeas.store');