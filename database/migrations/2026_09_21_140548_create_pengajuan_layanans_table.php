<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengajuan_layanans', function (Blueprint $table) {
            $table->id();

            // Layanan yang dipilih
            $table->foreignId('layanan_id')
                ->constrained('layanans')
                ->cascadeOnDelete();

            // Identitas pengajuan layanan
            $table->string('nomor_pengajuan')->unique();

            // Data pemohon
            $table->string('nik', 16);
            $table->string('nama_lengkap');
            $table->string('nomor_hp', 20);

            // Alamat
            $table->text('alamat');
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten_kota');
            $table->string('provinsi');

            // Keperluan layanan
            $table->text('keperluan');

            // Status pengajuan
            $table->string('status')->default('menunggu_verifikasi');

            // Catatan petugas
            $table->text('catatan_petugas')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan_layanans');
    }
};