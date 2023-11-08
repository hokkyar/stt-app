<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Profile;

class DashboardController extends Controller
{
  private $stt_profile, $kegiatan_terbaru;

  public function __construct()
  {
    $this->stt_profile = Profile::find(1);
    $this->kegiatan_terbaru = Kegiatan::latest()->first();
  }

  public function admin_dashboard()
  {
    $jumlah_anggota = Anggota::count();
    $berita_terkini = Berita::latest()->first();
    return view('pages.admin.index', [
      'nama_stt' => $this->stt_profile->nama_stt,
      'kegiatan_terbaru' => $this->kegiatan_terbaru,
      'jumlah_anggota' => $jumlah_anggota,
      'berita_terkini' => $berita_terkini
    ]);
  }

  public function anggota_dashboard()
  {
    return view('pages.anggota.index', [
      'nama_stt' => $this->stt_profile->nama_stt,
      'kegiatan_terbaru' => $this->kegiatan_terbaru
    ]);
  }
}
