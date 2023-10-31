<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * tabel untuk pengguna
   */
  public function up(): void
  {
    Schema::create('user', function (Blueprint $table) {
      $table->id();
      $table->string('username');
      $table->string('password');
      $table->enum('role', ['admin', 'user'])->default('user');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('user');
  }
};
