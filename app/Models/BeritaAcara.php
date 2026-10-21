<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeritaAcara extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'isi_berita_acara',
        'tanggal_kegiatan',
        'nomor_berita_acara',
        'dokumen_pdf',
        'status',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_kegiatan' => 'date',
            'published_at' => 'datetime',
        ];
    }
}
