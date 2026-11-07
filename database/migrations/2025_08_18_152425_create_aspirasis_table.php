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
        Schema::create('aspirasis', function (Blueprint $table) {
            $table->id();
            $table->string('peran'); // Siswa atau Orang Tua
            $table->string('nama_lengkap');
            $table->string('nama_siswa')->nullable(); // Diisi oleh orang tua, jadi bisa kosong
            $table->string('jenjang');
            $table->string('jalur_aspirasi');
            $table->string('kategori_aspirasi');
            $table->string('kategori_lainnya')->nullable(); // Jika kategori "Yang lain" diisi
            $table->text('aspirasi_detail');
            $table->string('pertemuan'); // Ya atau Tidak
            $table->string('kontak')->nullable(); // Opsional, jadi bisa kosong
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspirasis');
    }
};
