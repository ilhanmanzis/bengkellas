<?php

use App\Http\Controllers\Galeri;
use App\Http\Controllers\Home;
use App\Http\Controllers\Kontak;
use App\Http\Controllers\Layanan;
use App\Http\Controllers\Portofolio;
use App\Http\Controllers\TentangKami;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/tentangkami', [TentangKami::class, 'index'])->name('tentang');
Route::get('/layanan', [Layanan::class, 'index'])->name('layanan');
Route::get('/portofolio', [Portofolio::class, 'index'])->name('portofolio');
Route::get('/portofolio/{id}', [Portofolio::class, 'show'])->name('show_portofolio');
Route::get('/galeri', [Galeri::class, 'index'])->name('galeri');
Route::get('/kontak', [Kontak::class, 'index'])->name('kontak');
