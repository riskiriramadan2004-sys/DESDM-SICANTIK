<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengajuan_bantuan', function (Blueprint $table) {
            $table->id();

            // Identitas pengajuan
            $table->string('nomor_pengajuan')->unique();

            // Data pemohon
            $table->string('nik', 16);
            $table->string('nama_lengkap');
            $table->string('nomor_kk', 16);
            $table->string('nomor_hp', 20);

            // Alamat pemohon
            $table->text('alamat');
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten_kota');
            $table->string('provinsi');

            // Kondisi rumah
            $table->string('status_kepemilikan_rumah');
            $table->string('kondisi_rumah');
            $table->string('sumber_listrik');
            $table->string('daya_listrik')->nullable();

            // Alasan pengajuan
            $table->text('alasan_pengajuan');

            // Status proses pengajuan
            $table->string('status')->default('menunggu_verifikasi');

            // Catatan dari petugas
            $table->text('catatan_petugas')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan_bantuan');
    }
};