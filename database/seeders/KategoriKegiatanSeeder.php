<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriKegiatan;

class KategoriKegiatanSeeder extends Seeder
{
  public function run(): void
  {
    KategoriKegiatan::create([
      'nama_kategori' => 'rapat'
    ]);
    KategoriKegiatan::create([
      'nama_kategori' => 'agenda'
    ]);
    KategoriKegiatan::create([
      'nama_kategori' => 'proker'
    ]);
  }
}
