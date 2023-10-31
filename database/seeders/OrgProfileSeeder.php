<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrgProfile;

class OrgProfileSeeder extends Seeder
{
  public function run(): void
  {
    OrgProfile::create([
      'stt_name' => 'STT Pagma Shanti',
      'stt_location' => 'Desa Bondalem, Kec. Tejakula, Buleleng, Bali',
      'stt_img_url' => 'https://sttkeren/imgprofile',
    ]);
  }
}
