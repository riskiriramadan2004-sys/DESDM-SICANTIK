<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PengajuanLayanan extends Model
{
    protected $fillable = [
        'layanan_id',
        'nomor_pengajuan',
        'nik',
        'nama_lengkap',
        'nomor_hp',
        'alamat',
        'desa_kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'keperluan',
        'status',
        'catatan_petugas',
    ];

    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class);
    }
}