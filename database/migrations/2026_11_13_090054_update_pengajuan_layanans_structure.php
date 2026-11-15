
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pengajuan_layanans', function (Blueprint $table) {
            // Tambahkan jenis pemohon dan asal instansi
            $table->string('jenis_pemohon')
                ->default('perorangan')
                ->after('nomor_pengajuan');

            $table->string('nama_instansi')
                ->nullable()
                ->after('jenis_pemohon');

            // Hapus NIK dan rincian wilayah
            $table->dropColumn([
                'nik',
                'desa_kelurahan',
                'kecamatan',
                'kabupaten_kota',
                'provinsi',
            ]);
        });
    }

    public function down(): void
    {
        Schema::table('pengajuan_layanans', function (Blueprint $table) {
            // Kembalikan kolom lama jika rollback
            $table->string('nik', 16)->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten_kota')->nullable();
            $table->string('provinsi')->nullable();

            $table->dropColumn([
                'jenis_pemohon',
                'nama_instansi',
            ]);
        });
    }
};
