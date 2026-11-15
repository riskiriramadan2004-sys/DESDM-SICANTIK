
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

            // Identitas pengajuan
            $table->string('nomor_pengajuan')->unique();

            // Data pemohon
            $table->string('jenis_pemohon')->default('perorangan');
            $table->string('nama_lengkap');
            $table->string('nama_instansi');
            $table->string('nomor_hp', 20);

            // Alamat lengkap
            $table->text('alamat');

            // Keperluan layanan
            $table->text('keperluan');

            // Status pengajuan
            $table->string('status')
                ->default('Menunggu Verifikasi');

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
