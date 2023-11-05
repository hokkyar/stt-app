<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
  public function run(): void
  {
    User::create([
      'username' => 'pagmashanti',
      'password' => Hash::make('admin123'),
      'role' => 'admin',
    ]);

    User::create([
      'username' => 'hokkyar',
      'password' => Hash::make('user123'),
      'role' => 'anggota',
    ]);

    User::create([
      'username' => 'ngurahagp',
      'password' => Hash::make('user123'),
      'role' => 'anggota',
    ]);

    User::create([
      'username' => 'indradewangkara',
      'password' => Hash::make('user123'),
      'role' => 'anggota',
    ]);
  }
}
