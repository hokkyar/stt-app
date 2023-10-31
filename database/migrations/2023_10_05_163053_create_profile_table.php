<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * tabel untuk profile stt & struktur organisasi
   */
  public function up(): void
  {
    Schema::create('profile', function (Blueprint $table) {
      $table->id();
      $table->string('nama_stt');
      $table->string('kontak');
      $table->string('struktur');
      $table->string('deskripsi_lain');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('profile');
  }
};
