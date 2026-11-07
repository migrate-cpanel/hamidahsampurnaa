<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->text('short_description')->nullable();
            $table->longText('content');
            $table->string('image')->nullable(); // Kolom gambar yang benar
            $table->date('published_date')->nullable();
            $table->string('author')->nullable();
            $table->string('editor')->nullable();
            $table->string('photographer')->nullable();
            $table->unsignedBigInteger('idadmins')->nullable(); // Kolom untuk ID admin
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};