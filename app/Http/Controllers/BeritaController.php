<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
  public function index()
  {
    $all_berita = Berita::all();
    return view('pages.admin.berita.index', compact('all_berita'));
  }

  public function show($id)
  {
    $berita = Berita::find($id);
    return view('pages.admin.berita.detail', compact('berita'));
  }

  public function add()
  {
    return view('pages.admin.berita.add');
  }

  public function edit($id)
  {
    $berita = Berita::find($id);
    return view('pages.admin.berita.edit', compact('berita'));
  }

  public function create(Request $request)
  {
    $request->validate([
      'judul' => 'required',
      'isi' => 'required',
    ]);

    $berita = new Berita();

    if ($request->sampul) {
      $request->validate([
        'sampul' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
      ]);
      $sampul = $request->file('sampul');
      $nama_gambar = time() . '.' . $sampul->getClientOriginalExtension();
      $sampul->move(public_path('uploads'), $nama_gambar);
      $berita->sampul = 'uploads/' . $nama_gambar;
    } else {
      $berita->sampul = 'https://images6.alphacoders.com/860/860645.png';
    }
    $berita->judul = $request->judul;
    $berita->isi = $request->isi;
    $berita->save();

    return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'judul' => 'required',
      'isi' => 'required',
    ]);

    $berita = Berita::find($id);

    if ($request->sampul) {
      $request->validate([
        'sampul' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
      ]);
      $sampul = $request->file('sampul');
      $nama_gambar = time() . '.' . $sampul->getClientOriginalExtension();
      $sampul->move(public_path('uploads'), $nama_gambar);
      $berita->sampul = 'uploads/' . $nama_gambar;
    }

    $berita->judul = $request->judul;
    $berita->isi = $request->isi;
    $berita->save();

    return redirect()->route('berita.show', $id)->with('success', 'Berita berhasil diedit');
  }

  public function delete($id)
  {
    Berita::destroy($id);
    return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
  }
}
