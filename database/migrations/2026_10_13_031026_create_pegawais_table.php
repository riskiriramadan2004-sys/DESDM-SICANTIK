
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();

            $table->string('nip', 30)->nullable()->unique();
            $table->string('nama', 150);
            $table->string('jenis_kelamin', 20);
            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('pendidikan_terakhir', 100)->nullable();

            $table->string('status_kepegawaian', 50);
            $table->string('status_pegawai', 30)->default('aktif');

            $table->string('jabatan', 150)->nullable();
            $table->string('jenis_jabatan', 50)->nullable();
            $table->string('unit_kerja', 150)->nullable();
            $table->string('pangkat_golongan', 50)->nullable();

            $table->date('tanggal_mulai_kerja')->nullable();
            $table->date('tanggal_mulai_jabatan')->nullable();

            $table->unsignedTinyInteger('batas_usia_pensiun')->nullable();
            $table->date('tanggal_pensiun')->nullable();

            $table->text('keterangan')->nullable();

            $table->timestamps();

            $table->index('nama');
            $table->index('jenis_kelamin');
            $table->index('status_kepegawaian');
            $table->index('status_pegawai');
            $table->index('unit_kerja');
            $table->index('tanggal_pensiun');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
