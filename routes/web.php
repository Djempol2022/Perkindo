<?php

use App\Http\Controllers\umum\BerandaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(BerandaController::class)->group(function () {
    Route::get('/', 'beranda')->name('Beranda');
    Route::get('profil', 'profil')->name('Profil');
    Route::get('berita', 'berita')->name('Galeri.berita');
    Route::get('agenda', 'agenda')->name('Galeri.agenda');
    Route::get('galeri-kegiatan', 'galeri')->name('Galeri.kegiatan');
    Route::get('layanan', 'layanan')->name('Layanan');
    Route::get('anggota', 'anggota')->name('Anggota');
    Route::get('kontak', 'kontak')->name('Kontak');
});
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('Login');
});
