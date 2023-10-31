<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
  public function run(): void
  {
    Activity::create([
      'title' => 'Agenda Masak',
      'description' => 'masak-masak bro',
      'date' => '2023-10-01',
      'time' => '12:00:00',
      'location' => 'Rumah Agung',
      'act_category' => 'agenda',
      'meet_link' => null,
    ]);

    Activity::create([
      'title' => 'Kerja Rodi',
      'description' => 'kerja rodi bro',
      'date' => '2023-10-01',
      'time' => '13:00:00',
      'location' => 'Kantor Desa Gerokgak',
      'act_category' => 'proker',
      'meet_link' => null,
    ]);

    Activity::create([
      'title' => 'Rapat Ngayah',
      'description' => 'ngayah bro',
      'date' => '2023-10-02',
      'time' => '17:00:00',
      'location' => 'Kantor Desa',
      'act_category' => 'rapat',
      'meet_link' => null,
    ]);

    Activity::create([
      'title' => 'Rapat Dadakan Online',
      'description' => 'Pembahasan penting ni bro',
      'date' => '2023-10-17',
      'time' => '14:00:00',
      'location' => 'Online',
      'act_category' => 'rapat',
      'meet_link' => 'https://meet.google.com/1541641',
    ]);
  }
}
