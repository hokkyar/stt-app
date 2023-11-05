<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
  public function index_admin()
  {
    return view('pages.admin.kegiatan.index');
  }

  public function show_admin()
  {
    return view('pages.admin.kegiatan.detail');
  }

  public function add()
  {
    dd('halaman add');
  }

  public function edit()
  {
    dd('halaman edit');
  }

  public function create()
  {
    dd('proses create');
  }

  public function update()
  {
    dd('proses update');
  }

  public function delete()
  {
    dd('proses delete');
  }

  public function index_anggota()
  {
    return view('pages.anggota.kegiatan.index');
  }

  public function show_anggota()
  {
    return view('pages.anggota.kegiatan.detail');
  }

  public function join_anggota()
  {
    dd('Bergabung ke kegiatan');
  }
}
