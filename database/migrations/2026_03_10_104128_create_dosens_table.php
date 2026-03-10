<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug')->unique(); // Untuk link URL detail dosen
            $table->string('foto');
            $table->string('jabatan_prodi')->nullable(); // cth: Ketua Prodi
            $table->string('nidn')->nullable();
            $table->string('jabatan_akademik')->nullable();
            $table->string('program_studi')->nullable();
            $table->string('bidang_keahlian')->nullable();
            $table->string('kelompok_keahlian')->nullable();
            $table->text('pendidikan')->nullable();
            $table->json('publikasi')->nullable(); // JSON untuk menyimpan banyak publikasi
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};