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
      'name' => 'Admin STT Pagma Shanti',
      'username' => 'pagmashanti',
      'email' => 'pagmasanti@gmail.com',
      'role' => 'admin',
      'password' => Hash::make('admin123'),
    ]);

    User::create([
      'name' => 'Hokky Bro',
      'username' => 'hokkyar',
      'email' => 'hokky@gmail.com',
      'role' => 'user',
      'password' => Hash::make('user123'),
    ]);

    User::create([
      'name' => 'Agung',
      'username' => 'ngurahagp',
      'email' => 'agung@gmail.com',
      'role' => 'user',
      'password' => Hash::make('user123'),
    ]);

    User::create([
      'name' => 'Indra',
      'username' => 'indradewangkara',
      'email' => 'indra@gmail.com',
      'role' => 'user',
      'password' => Hash::make('user123'),
    ]);
  }
}
