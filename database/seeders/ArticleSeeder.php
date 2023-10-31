<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
  public function run(): void
  {
    Article::create([
      'title' => 'Berita Dummy 1',
      'content' => 'berita dummy 1',
      'img_url' => 'beritadummy1.google.com',
    ]);

    Article::create([
      'title' => 'Berita Dummy 2',
      'content' => 'berita dummy 1',
      'img_url' => 'beritadummy2.google.com',
    ]);
  }
}
