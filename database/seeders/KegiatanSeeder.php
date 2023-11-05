<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kegiatan;

class KegiatanSeeder extends Seeder
{
  public function run(): void
  {
    Kegiatan::create([
      'nama_kegiatan' => 'Agenda Masak',
      'deskripsi' => 'masak-masak bro',
      'tanggal_mulai' => '2023-10-01',
      'tanggal_selesai' => '2023-10-01',
      'tempat' => 'Rumah Agung',
      'kategori_id' => 2,
      'meet_link' => null,
    ]);

    Kegiatan::create([
      'nama_kegiatan' => 'Kerja Rodi',
      'deskripsi' => 'kerja rodi bro',
      'tanggal_mulai' => '2023-10-01',
      'tanggal_selesai' => '2023-10-01',
      'tempat' => 'Kantor Desa Gerokgak',
      'kategori_id' => 3,
      'meet_link' => null,
    ]);

    Kegiatan::create([
      'nama_kegiatan' => 'Rapat Ngayah',
      'deskripsi' => 'ngayah bro',
      'tanggal_mulai' => '2023-10-02',
      'tanggal_selesai' => '2023-10-02',
      'tempat' => 'Kantor Desa',
      'kategori_id' => 1,
      'meet_link' => null,
    ]);

    Kegiatan::create([
      'nama_kegiatan' => 'Rapat Dadakan Online',
      'deskripsi' => 'Pembahasan penting ni bro',
      'tanggal_mulai' => '2023-10-17',
      'tanggal_selesai' => '2023-10-17',
      'tempat' => 'Online',
      'kategori_id' => 1,
      'meet_link' => 'https://meet.google.com/1541641',
    ]);
  }
}
