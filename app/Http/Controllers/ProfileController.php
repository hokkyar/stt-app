<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index()
  {
    return view('pages.admin.profil.index');
  }

  public function edit()
  {
    return view('pages.admin.profil.edit');
  }

  public function update()
  {
    dd('proses update');
  }
}
