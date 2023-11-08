<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
  public function index()
  {
    $all_anggota = User::with('anggota')->get()->where('role', 'anggota');
    return view('pages.admin.anggota.index', compact('all_anggota'));
  }

  public function show($id)
  {
    dd('halaman show');
  }

  public function add()
  {
    return view('pages.admin.anggota.add');
  }

  public function create(Request $request)
  {
    $request->validate([
      'username' => [
        'required',
        Rule::unique('user', 'username')->ignore($request->id, 'id'),
      ],
      'nama_anggota' => 'required',
      'alamat' => 'required',
      'status' => 'required',
      'peran' => 'required',
    ]);

    $user = new User();
    $user->username = $request->username;
    $user->password = Hash::make($request->username);
    $user->role = 'anggota';
    $user->save();
    $userId = $user->id;

    $anggota = new Anggota();
    $anggota->user_id = $userId;
    $anggota->nama_anggota = $request->nama_anggota;
    $anggota->alamat = $request->alamat;
    $anggota->status = $request->status;
    $anggota->peran = $request->peran;
    $anggota->save();

    return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan');
  }

  public function delete($id)
  {
    User::destroy($id);
    return redirect()->route('anggota.index')->with('success', 'Anggota berhasil dihapus');
  }
}
