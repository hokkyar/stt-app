<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
  public function index()
  {
    return view('pages.admin.berita.index');
  }

  public function show()
  {
    return view('pages.admin.berita.detail');
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
}
