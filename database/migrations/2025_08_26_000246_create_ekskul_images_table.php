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
        Schema::create('ekskul_images', function (Blueprint $table) {
            $table->id();
            // Menghubungkan ke tabel 'ekskuls'
            $table->foreignId('ekskul_id')->constrained()->onDelete('cascade');
            $table->string('image_path'); // Path atau nama file gambar
            $table->string('alt_text')->nullable(); // Teks alternatif untuk gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekskul_images');
    }
};