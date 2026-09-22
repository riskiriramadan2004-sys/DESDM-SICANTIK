<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\PengajuanLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PengajuanLayananController extends Controller
{
    /**
     * Menampilkan form pengajuan layanan.
     */
    public function create(Layanan $layanan)
    {
        return view(
            'layanan-online.pengajuan',
            compact('layanan')
        );
    }

    /**
     * Menyimpan pengajuan layanan.
     */
    public function store(
        Request $request,
        Layanan $layanan
    ) {
        $validated = $request->validate([
            'nik' => [
                'required',
                'digits:16'
            ],

            'nama_lengkap' => [
                'required',
                'string',
                'max:255'
            ],

            'nomor_hp' => [
                'required',
                'string',
                'max:20'
            ],

            'alamat' => [
                'required',
                'string'
            ],

            'desa_kelurahan' => [
                'required',
                'string',
                'max:255'
            ],

            'kecamatan' => [
                'required',
                'string',
                'max:255'
            ],

            'kabupaten_kota' => [
                'required',
                'string',
                'max:255'
            ],

            'provinsi' => [
                'required',
                'string',
                'max:255'
            ],

            'keperluan' => [
                'required',
                'string'
            ],
        ]);

        $nomorPengajuan =
            'LO-' .
            now()->format('Ymd') .
            '-' .
            strtoupper(Str::random(5));

        $pengajuan = PengajuanLayanan::create([
            'layanan_id' => $layanan->id,
            'nomor_pengajuan' => $nomorPengajuan,
            ...$validated,
            'status' => 'Menunggu Verifikasi',
        ]);

        return redirect()
            ->route(
                'layanan-online.pengajuan.berhasil',
                $pengajuan
            )
            ->with(
                'success',
                'Pengajuan layanan berhasil dikirim.'
            );
    }

    /**
     * Menampilkan halaman berhasil.
     */
    public function berhasil(
        PengajuanLayanan $pengajuanLayanan
    ) {
        $pengajuanLayanan->load(
            'layanan.bidangLayanan'
        );

        return view(
            'layanan-online.pengajuan-berhasil',
            compact('pengajuanLayanan')
        );
    }
}