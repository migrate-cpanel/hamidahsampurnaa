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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content');
            $table->string('parent_name', 100);
            $table->string('parent_photo_url', 100);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->unsignedBigInteger('idadmins')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
