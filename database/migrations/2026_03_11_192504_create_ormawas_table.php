<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ormawas', function (Blueprint $table) {
            $table->id();
            
            // Nama panjang (Contoh: Unit Kegiatan Mahasiswa)
            $table->string('nama_organisasi'); 
            
            // Nama singkat/span (Contoh: FORMAT, Zaradika, Musik)
            $table->string('singkatan'); 
            
            // Deskripsi profil organisasi
            $table->text('deskripsi'); 
            
            // Path logo di storage
            $table->string('logo'); 
            
            // Link jika diklik 'Baca Selengkapnya'
            $table->string('link_selengkapnya')->nullable(); 
            
            // Urutan slide
            $table->integer('sort_order')->default(0); 
            
            // Status tampil/sembunyi
            $table->boolean('is_active')->default(true); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ormawas');
    }
};