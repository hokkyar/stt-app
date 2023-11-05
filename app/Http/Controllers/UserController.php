<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    return view('pages.admin.anggota.index');
  }

  public function show()
  {
    dd('halaman show');
  }

  public function add()
  {
    return view('pages.admin.anggota.add');
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
