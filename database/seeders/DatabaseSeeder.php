<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\BeritaSeeder;
use Database\Seeders\ProfileSeeder;
use Database\Seeders\KategoriKegiatanSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\KegiatanSeeder;
use Database\Seeders\AnggotaSeeder;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $this->call(BeritaSeeder::class);
    $this->call(ProfileSeeder::class);
    $this->call(KategoriKegiatanSeeder::class);
    $this->call(UserSeeder::class);
    $this->call(KegiatanSeeder::class);
    $this->call(AnggotaSeeder::class);
  }
}
