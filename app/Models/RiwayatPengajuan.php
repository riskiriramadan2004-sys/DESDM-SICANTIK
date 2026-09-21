<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiwayatPengajuan extends Model
{
    protected $table = 'riwayat_pengajuans';

    protected $fillable = [
        'pengajuan_bantuan_id',
        'status',
        'catatan',
    ];

    public function pengajuanBantuan(): BelongsTo
    {
        return $this->belongsTo(
            PengajuanBantuan::class,
            'pengajuan_bantuan_id'
        );
    }
}