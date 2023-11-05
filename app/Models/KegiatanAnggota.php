<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanAnggota extends Model
{
  use HasFactory;
  protected $table = 'kegiatan_anggota';
  protected $guarded = ['id'];
}
