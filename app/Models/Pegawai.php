<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawais';

    protected $fillable = [
        'nip',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'pendidikan_terakhir',
        'status_kepegawaian',
        'status_pegawai',
        'jabatan',
        'jenis_jabatan',
        'unit_kerja',
        'pangkat_golongan',
        'tanggal_mulai_kerja',
        'tanggal_mulai_jabatan',
        'batas_usia_pensiun',
        'tanggal_pensiun',
        'keterangan',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_mulai_kerja' => 'date',
        'tanggal_mulai_jabatan' => 'date',
        'tanggal_pensiun' => 'date',
    ];

    public function getUmurAttribute()
    {
        if (!$this->tanggal_lahir) {
            return null;
        }

        return (int) $this->tanggal_lahir->diffInYears(now());
    }

    public function getMasaKerjaAttribute()
    {
        if (!$this->tanggal_mulai_kerja) {
            return null;
        }

        return $this->tanggal_mulai_kerja
            ->diff(now())
            ->format('%y tahun %m bulan');
    }

    public function getMasaJabatanAttribute()
    {
        if (!$this->tanggal_mulai_jabatan) {
            return null;
        }

        return $this->tanggal_mulai_jabatan
            ->diff(now())
            ->format('%y tahun %m bulan');
    }
}
