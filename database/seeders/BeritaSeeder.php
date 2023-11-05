<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
  public function run(): void
  {
    Berita::create([
      'judul' => 'Berita Dummy 1',
      'isi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos veritatis saepe....',
      'sampul' => 'https://images6.alphacoders.com/860/860645.png',
    ]);
    Berita::create([
      'judul' => 'Berita Dummy 2',
      'isi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos veritatis saepe....',
      'sampul' => 'https://images6.alphacoders.com/860/860645.png',
    ]);
    Berita::create([
      'judul' => 'Berita Dummy 3',
      'isi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos veritatis saepe....',
      'sampul' => 'https://images6.alphacoders.com/860/860645.png',
    ]);
    Berita::create([
      'judul' => 'Berita Dummy 4',
      'isi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos veritatis saepe....',
      'sampul' => 'https://images6.alphacoders.com/860/860645.png',
    ]);
    Berita::create([
      'judul' => 'Berita Dummy 5',
      'isi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos veritatis saepe....',
      'sampul' => 'https://images6.alphacoders.com/860/860645.png',
    ]);
    Berita::create([
      'judul' => 'Berita Dummy 6',
      'isi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos veritatis saepe....',
      'sampul' => 'https://images6.alphacoders.com/860/860645.png',
    ]);
  }
}
