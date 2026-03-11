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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            
            // Tipe slide: 'text' (untuk konten STMIK DCI) atau 'image' (untuk gambar full)
            $table->string('type')->default('image'); 
            
            // Field untuk tipe 'text'
            $table->string('title')->nullable();
            $table->string('highlight_word')->nullable(); // Opsional: Untuk kata yang ingin diwarnai (misal: "Informatika")
            $table->text('content')->nullable();
            $table->string('button_text')->nullable()->default('Baca Selengkapnya');
            $table->string('button_url')->nullable();
            
            // Field untuk tipe 'image' atau background
            $table->string('image')->nullable();
            
            // Pengaturan tambahan
            $table->integer('sort_order')->default(0); // Untuk mengatur urutan slide di Filament
            $table->boolean('is_active')->default(true); // Untuk mematikan/menyalakan slide tanpa menghapusnya
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};