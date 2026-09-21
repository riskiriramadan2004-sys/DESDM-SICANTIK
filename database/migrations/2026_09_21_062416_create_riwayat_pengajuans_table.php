<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('riwayat_pengajuans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pengajuan_bantuan_id')
                ->constrained('pengajuan_bantuan')
                ->cascadeOnDelete();

            $table->string('status');
            $table->text('keterangan')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('riwayat_pengajuans');
    }
};