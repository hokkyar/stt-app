<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKegiatan extends Model
{
  use HasFactory;
  protected $table = 'kategori_kegiatan';
  protected $guarded = ['id'];

  public function kegiatan()
  {
    return $this->hasMany(Kegiatan::class, 'kategori_id');
  }
}
