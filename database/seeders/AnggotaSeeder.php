<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Anggota;

class AnggotaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Anggota::create([
      'user_id' => 2,
      'nama_anggota' => 'Hokky Bro',
      'alamat' => 'Seririt',
      'status' => 'aktif',
      'peran' => 'peran 1',
    ]);
    Anggota::create([
      'user_id' => 3,
      'nama_anggota' => 'Ngurah Agung Pernata',
      'alamat' => 'Tinga-Tinga',
      'status' => 'aktif',
      'peran' => 'peran 2',
    ]);
    Anggota::create([
      'user_id' => 4,
      'nama_anggota' => 'Indra Dewangkara',
      'alamat' => 'Singaraja',
      'status' => 'aktif',
      'peran' => 'peran 3',
    ]);
  }
}
