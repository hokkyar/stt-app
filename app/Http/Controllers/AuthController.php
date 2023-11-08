<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function login_pages(Request $request)
  {
    if ($request->session()->has('user')) {
      if ($request->session()->get('user')->role == "admin") {
        return redirect()->route('dashboard.admin');
      } else {
        return redirect()->route('dashboard.anggota');
      }
    }
    return view('pages.login');
  }

  public function login(Request $request)
  {
    $credentials = $request->only('username', 'password');
    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      $user = Auth::user();
      $anggota = $user->anggota;
      session(['user' => $user, 'anggota' => $anggota]);
      if ($user->role == "admin") {
        return redirect()->route('dashboard.admin');
      } else {
        return redirect()->route('dashboard.anggota');
      }
    }
    return redirect()->route('login')->withErrors(['error' => 'Username atau password salah']);
  }

  public function logout(Request $request)
  {
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
  }
}
