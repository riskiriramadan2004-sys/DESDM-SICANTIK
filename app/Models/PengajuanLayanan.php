<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PengajuanLayanan extends Model
{
    protected $fillable = [
        'layanan_id',
        'nomor_pengajuan',
        'jenis_pemohon',
        'nama_lengkap',
        'nama_instansi',
        'nomor_hp',
        'alamat',
        'keperluan',
        'status',
        'catatan_petugas',
    ];

    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class);
    }
}