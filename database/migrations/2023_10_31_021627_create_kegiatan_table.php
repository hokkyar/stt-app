<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Tabel untuk agenda, program kerja, dan rapat
   */
  public function up(): void
  {
    Schema::create('kegiatan', function (Blueprint $table) {
      $table->id();
      $table->string('nama_kegiatan');
      $table->string('deskripsi');
      $table->date('tanggal_mulai');
      $table->date('tanggal_selesai');
      $table->string('tempat');
      $table->unsignedBigInteger('kategori_id');
      $table->string('meet_link')->nullable();
      $table->timestamps();

      $table->foreign('kategori_id')->references('id')->on('kategori_kegiatan')->onDelete('cascade')->onUpdate('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('kegiatan');
  }
};
