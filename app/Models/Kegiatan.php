<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
  use HasFactory;
  protected $table = 'kegiatan';
  protected $guarded = ['id'];

  public function kategori()
  {
    return $this->belongsTo(KategoriKegiatan::class, 'kategori_id');
  }

  public function kegiatan_anggota()
  {
    return $this->hasMany(KegiatanAnggota::class, 'kegiatan_id');
  }
}
