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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();

            // Nomor pengaduan yang dibuat otomatis
            $table->string('nomor_pengaduan')->unique();

            // Data pelapor
            $table->string('nama_lengkap');
            $table->string('nomor_hp', 20);

            // Informasi pengaduan
            $table->string('kategori');
            $table->string('judul');
            $table->text('isi_pengaduan');

            // Lampiran
            $table->string('foto')->nullable();
            $table->string('dokumen')->nullable();

            // Status pengaduan
            $table->enum('status', [
                'Baru',
                'Diproses',
                'Selesai'
            ])->default('Baru');

            // Tanggapan dari admin
            $table->text('tanggapan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};