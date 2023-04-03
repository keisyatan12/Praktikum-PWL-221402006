<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/daftar_mahasiswa', 'App\Http\Controllers\MahasiswaController@index');

Route::get('daftar_mahasiswa', [MahasiswaController::class, 'index']);
//Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);

Route::match(['get', 'post'], '/detail_mahasiswa',[MahasiswaController::class, 'detail_mhs']);
 Route::get('/admin/dashboard', [AdminController::class, 'index']);
 Route::get('/admin/postingan', [AdminController::class, 'show_postingan']);
 Route::get('/admin/arsip', [AdminController::class, 'show_arsip']);
 Route::get('/admin/harga', [AdminController::class, 'show_harga']);
 Route::get('/admin/stok', [AdminController::class, 'show_stok']);
 Route::get('/admin/member', [AdminController::class, 'show_member']);
 Route::get('/admin/settings', [AdminController::class, 'show_settings']);
 Route::get('/admin/password', [AdminController::class, 'show_password']);
 