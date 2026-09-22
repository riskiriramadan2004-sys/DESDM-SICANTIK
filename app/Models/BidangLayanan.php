<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BidangLayanan extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function layanans(): HasMany
    {
        return $this->hasMany(Layanan::class);
    }
}