<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduans';

    protected $fillable = [
        'nomor_pengaduan',
        'nama_lengkap',
        'nomor_hp',
        'kategori',
        'judul',
        'isi_pengaduan',
        'foto',
        'dokumen',
        'status',
        'tanggapan',
    ];
}