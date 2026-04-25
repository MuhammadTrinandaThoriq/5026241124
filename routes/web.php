<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('pert1', function () {
    return view('pertemuan1');
});

Route::get('pert2file1', function () {
    return view('pertemuan2news');
});

Route::get('pert2file2', function () {
    return view('pertemuan2news1');
});

Route::get('pert3file1', function () {
    return view('pertemuan3contoh');
});

Route::get('pert3file2', function () {
    return view('pertemuan3responsive');
});

Route::get('pert3file3', function () {
    return view('pertemuan3template');
});

Route::get('pert4', function () {
    return view('pertemuan4');
});

Route::get('pert5file2', function () {
    return view('pertemuan5index');
});

Route::get('pert5file3', function () {
    return view('pertemuan5linktree');
});
