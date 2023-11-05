<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function login_pages()
  {
    return view('pages.login');
  }

  public function login()
  {
    dd('proses login');
  }

  public function logout()
  {
    dd('proses logout');
  }
}
