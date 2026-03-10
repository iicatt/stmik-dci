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
        Schema::table('beritas', function (Blueprint $table) {
            // Menambahkan kolom kategori setelah kolom title
            $table->string('category')->nullable()->after('judul'); 
        });
    }

    public function down(): void
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
};
