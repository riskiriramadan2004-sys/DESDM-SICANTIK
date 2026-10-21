
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('berita_acaras', function (Blueprint $table) {
            $table->longText('isi_berita_acara')->nullable();
            $table->string('dokumen_pdf')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('berita_acaras', function (Blueprint $table) {
            $table->dropColumn('isi_berita_acara');
            $table->string('dokumen_pdf')->nullable(false)->change();
        });
    }
};
