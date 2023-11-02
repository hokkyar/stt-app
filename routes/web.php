<?php

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

Route::get('/', function () {
  return view('pages.home');
});

Route::get('/login', function () {
  return view('pages.login');
});

/* ANGGOTA KEGIATAN */
// kegiatan
Route::get('/anggota/kegiatan', function () {
  return view('pages.anggota.kegiatan.index');
});
// detail kegiatan
Route::get('/anggota/kegiatan/view/{id}', function () {
  return view('pages.anggota.kegiatan.detail');
});
/* END ANGGOTA KEGIATAN */

// admin dashboard
Route::get('/admin', function () {
  return view('pages.admin.index');
})->name('adminDashboard');

// anggota dashboard
Route::get('/anggota', function () {
  return view('pages.anggota.index');
})->name('anggotaDashboard');

/* ADMIN KEGIATAN */
// kegiatan
Route::get('/admin/kegiatan', function () {
  return view('pages.admin.kegiatan.index');
});
// detail kegiatan
Route::get('/admin/kegiatan/view/{id}', function () {
  return view('pages.admin.kegiatan.detail');
});
/* END ADMIN KEGIATAN */

/* ADMIN ANGGOTA */
Route::get('/admin/anggota', function () {
  return view('pages.admin.anggota.index');
});
Route::get('/admin/anggota/add', function () {
  return view('pages.admin.anggota.add');
});
/* END ADMIN ANGGOTA */

/* ADMIN BERITA */
Route::get('/admin/berita', function () {
  return view('pages.admin.berita.index');
});
Route::get('/admin/berita/view/{id}', function () {
  return view('pages.admin.berita.detail');
});
/* END ADMIN BERITA */

/* ADMIN PROFIL */
Route::get('/admin/profil', function () {
  return view('pages.admin.profil.index');
});
Route::get('/admin/profil/edit', function () {
  return view('pages.admin.profil.edit');
});
/* END ADMIN PROFIL */
