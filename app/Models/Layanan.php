<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Layanan extends Model
{
    protected $fillable = [
        'bidang_layanan_id',
        'nomor_layanan',
        'nama',
        'deskripsi',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function bidangLayanan(): BelongsTo
    {
        return $this->belongsTo(BidangLayanan::class);
    }

    public function pengajuanLayanans(): HasMany
    {
        return $this->hasMany(PengajuanLayanan::class);
    }
}