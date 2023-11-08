<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index()
  {
    $profile = Profile::find(1);
    return view('pages.admin.profil.index', compact('profile'));
  }

  public function edit()
  {
    $profile = Profile::find(1);
    return view('pages.admin.profil.edit', compact('profile'));
  }

  public function update(Request $request)
  {
    $request->validate([
      'nama_stt' => 'required',
      'kontak' => 'required',
    ]);

    $profile = Profile::find(1);
    if ($request->struktur) {
      $request->validate([
        'struktur' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
      ]);
      $struktur = $request->file('struktur');
      $nama_gambar = time() . '.' . $struktur->getClientOriginalExtension();
      $struktur->move(public_path('uploads'), $nama_gambar);
      $profile->struktur = 'uploads/' . $nama_gambar;
    }

    $profile->nama_stt = $request->nama_stt;
    $profile->kontak = $request->kontak;
    $profile->deskripsi_lain = $request->deskripsi_lain;
    $profile->save();

    return redirect()->route('profile.index')->with('success', 'Profil STT berhasil diedit');
  }
}
