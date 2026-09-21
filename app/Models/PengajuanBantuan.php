<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PengajuanBantuan extends Model
{
    protected $table = 'pengajuan_bantuan';

    protected $fillable = [
        'nik',
        'nama_lengkap',
        'nomor_kk',
        'nomor_hp',
        'alamat',
        'desa_kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'status_kepemilikan_rumah',
        'kondisi_rumah',
        'sumber_listrik',
        'daya_listrik',
        'penghasilan',
        'jumlah_anggota_keluarga',
        'alasan_pengajuan',
        'dokumen_ktp',
        'dokumen_kk',
        'dokumen_pendukung',
        'status',
        'nomor_pengajuan',
        'catatan_petugas',
    ];

    protected static function booted()
    {
        static::creating(function ($pengajuan) {

            if (empty($pengajuan->nomor_pengajuan)) {

                $tanggal = now()->format('Ymd');

                $jumlahHariIni = self::whereDate(
                    'created_at',
                    now()->toDateString()
                )->count();

                $urutan = str_pad(
                    $jumlahHariIni + 1,
                    4,
                    '0',
                    STR_PAD_LEFT
                );

                $pengajuan->nomor_pengajuan =
                    'ESDM-' . $tanggal . '-' . $urutan;
            }

            if (empty($pengajuan->status)) {
                $pengajuan->status = 'Menunggu Verifikasi';
            }
        });
    }

    /**
     * Relasi ke riwayat pengajuan.
     */
    public function riwayat(): HasMany
    {
        return $this->hasMany(
            RiwayatPengajuan::class,
            'pengajuan_bantuan_id'
        )->latest();
    }
}