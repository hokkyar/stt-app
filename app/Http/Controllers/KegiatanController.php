<?php

namespace App\Http\Controllers;

use App\Models\KategoriKegiatan;
use App\Models\Kegiatan;
use App\Models\KegiatanAnggota;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
  public function index_admin()
  {
    $all_kegiatan = Kegiatan::with('kategori')->get();
    return view('pages.admin.kegiatan.index', compact('all_kegiatan'));
  }

  public function show_admin($kegiatan_id)
  {
    $kegiatan = Kegiatan::with('kategori')->find($kegiatan_id);
    $anggota = KegiatanAnggota::with('anggota')->where('kegiatan_id', $kegiatan_id)->get();
    return view('pages.admin.kegiatan.detail', compact('kegiatan', 'anggota'));
  }

  public function add()
  {
    $all_kategori = KategoriKegiatan::all();
    return view('pages.admin.kegiatan.add', compact('all_kategori'));
  }

  public function edit($id)
  {
    $kegiatan = Kegiatan::find($id);
    $all_kategori = KategoriKegiatan::all();
    return view('pages.admin.kegiatan.edit', compact('all_kategori', 'kegiatan'));
  }

  public function create(Request $request)
  {
    $request->validate([
      'nama_kegiatan' => 'required',
      'deskripsi' => 'required',
      'kategori_id' => 'required',
      'tanggal_mulai' => 'required|date',
      'tanggal_selesai' => 'required|date',
      'tempat' => 'required',
    ]);

    Kegiatan::create($request->all());
    return redirect()->route('kegiatan.index_admin')->with('success', 'Kegiatan berhasil ditambahkan');
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'nama_kegiatan' => 'required',
      'deskripsi' => 'required',
      'kategori_id' => 'required',
      'tanggal_mulai' => 'required|date',
      'tanggal_selesai' => 'required|date',
      'tempat' => 'required',
    ]);
    Kegiatan::where('id', $id)->update($request->except('_method', '_token'));
    return redirect()->route('kegiatan.show_admin', $id)->with('success', 'Kegiatan berhasil diedit');
  }

  public function delete($id)
  {
    Kegiatan::destroy($id);
    return redirect()->route('kegiatan.index_admin')->with('success', 'Kegiatan berhasil dihapus');
  }

  public function index_anggota()
  {
    $all_kegiatan = Kegiatan::with('kategori')->get();
    return view('pages.anggota.kegiatan.index', compact('all_kegiatan'));
  }

  public function show_anggota(Request $request, $id)
  {
    $kegiatan = Kegiatan::with('kategori')->find($id);
    $anggota_id = $request->session()->get('anggota')->id;
    $is_joined = KegiatanAnggota::where('anggota_id', $anggota_id)
      ->where('kegiatan_id', $kegiatan->id)
      ->exists();
    return view('pages.anggota.kegiatan.detail', compact('kegiatan', 'is_joined'));
  }

  public function join_anggota(Request $request, $kegiatan_id)
  {
    $anggota_id = $request->session()->get('anggota')->id;
    $is_joined = KegiatanAnggota::where('anggota_id', $anggota_id)
      ->where('kegiatan_id', $kegiatan_id)
      ->exists();
    if ($is_joined) {
      return redirect()->route('kegiatan.show_anggota', $kegiatan_id)->withErrors(['error' => 'Anda sudah bergabung pada kegiatan ini']);
    }

    $kegiatan_anggota = new KegiatanAnggota();
    $kegiatan_anggota->anggota_id = $anggota_id;
    $kegiatan_anggota->kegiatan_id = $kegiatan_id;
    $kegiatan_anggota->save();

    return redirect()->route('kegiatan.show_anggota', $kegiatan_id)->with('success', 'Berhasil bergabung pada kegiatan ini');
  }
}
