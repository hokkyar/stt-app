<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
  public function run(): void
  {
    Profile::create([
      'nama_stt' => 'STT Pagma Shanti',
      'kontak' => 'Desa Bondalem, Kec. Tejakula, Buleleng, Bali',
      'struktur' => 'https://i.pinimg.com/originals/eb/e8/95/ebe895592a44af8acfeee32aa4fc8555.jpg',
      'deskripsi_lain' => 'Ini adalah deskripsi STT Pagma Shanti',
    ]);
  }
}
