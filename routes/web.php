<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('pages.home');
});
Route::get('/anggota', function () {
  return view('pages.anggota.index');
});
Route::get('/admin', function () {
  return view('pages.admin.index');
});

// AUTH (LOGIN & LOGOUT)
Route::get('/login', [AuthController::class, 'login_pages'])->name('pages.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// KEGIATAN
Route::get('/anggota/kegiatan', [KegiatanController::class, 'index_anggota'])->name('kegiatan.index_anggota');
Route::get('/anggota/kegiatan/view/{id}', [KegiatanController::class, 'show_anggota'])->name('kegiatan.show_anggota');
Route::post('/anggota/kegiatan/view/{id}/join', [KegiatanController::class, 'join_anggota'])->name('kegiatan.join_anggota');

Route::get('/admin/kegiatan', [KegiatanController::class, 'index_admin'])->name('kegiatan.index_admin');
Route::get('/admin/kegiatan/view/{id}', [KegiatanController::class, 'show_admin'])->name('kegiatan.show_admin');
Route::get('/admin/kegiatan/add', [KegiatanController::class, 'add'])->name('kegiatan.add');
Route::get('/admin/kegiatan/edit/{id}', [KegiatanController::class, 'edit'])->name('kegiatan.edit');
Route::post('/admin/kegiatan/create', [KegiatanController::class, 'create'])->name('kegiatan.create');
Route::put('/admin/kegiatan/update/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update');
Route::delete('/admin/kegiatan/delete/{id}', [KegiatanController::class, 'delete'])->name('kegiatan.delete');

// ANGGOTA
Route::get('/admin/anggota', [UserController::class, 'index'])->name('anggota.index');
Route::get('/admin/anggota/view/{id}', [UserController::class, 'show'])->name('anggota.show');
Route::get('/admin/anggota/add', [UserController::class, 'add'])->name('anggota.add');
Route::get('/admin/anggota/edit/{id}', [UserController::class, 'edit'])->name('anggota.edit');
Route::post('/admin/anggota/create/', [UserController::class, 'create'])->name('anggota.create');
Route::put('/admin/anggota/update/{id}/', [UserController::class, 'update'])->name('anggota.update');
Route::delete('/admin/anggota/delete/{id}/', [UserController::class, 'delete'])->name('anggota.delete');

// BERITA
Route::get('/admin/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/admin/berita/view/{id}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/admin/berita/add', [BeritaController::class, 'add'])->name('berita.add');
Route::get('/admin/berita/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
Route::post('/admin/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/admin/berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
Route::delete('/admin/berita/delete/{id}', [BeritaController::class, 'delete'])->name('berita.delete');

// PROFIL
Route::get('/admin/profil', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/admin/profil/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/admin/profil/update', [ProfileController::class, 'update'])->name('profile.update');
