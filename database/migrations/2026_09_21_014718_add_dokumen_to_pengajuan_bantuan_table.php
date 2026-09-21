<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pengajuan_bantuan', function (Blueprint $table) {
            $table->string('dokumen_ktp')->nullable();
            $table->string('dokumen_kk')->nullable();
            $table->string('dokumen_pendukung')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pengajuan_bantuan', function (Blueprint $table) {
            $table->dropColumn([
                'dokumen_ktp',
                'dokumen_kk',
                'dokumen_pendukung',
            ]);
        });
    }
};