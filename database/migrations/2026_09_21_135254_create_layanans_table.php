<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();

            // Bidang layanan
            $table->foreignId('bidang_layanan_id')
                ->constrained('bidang_layanans')
                ->cascadeOnDelete();

            // Identitas layanan online
            $table->string('nomor_layanan')->unique();
            $table->string('nama');
            $table->text('deskripsi')->nullable();

            // Status layanan
            $table->boolean('status')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};