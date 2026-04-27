<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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