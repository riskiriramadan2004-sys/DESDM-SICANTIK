<?php

namespace App\Http\Controllers;

use App\Models\PengajuanBantuan;
use Illuminate\Http\Request;

class PengajuanBantuanController extends Controller
{
    /**
     * Menampilkan form pengajuan bantuan.
     */
    public function create()
    {
        return view('pengajuan-bantuan.create');
    }

    /**
     * Menyimpan pengajuan bantuan.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|string|max:20',
            'nama_lengkap' => 'required|string|max:255',
            'nomor_kk' => 'required|string|max:20',
            'nomor_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'desa_kelurahan' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten_kota' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'status_kepemilikan_rumah' => 'required|string|max:255',
            'kondisi_rumah' => 'required|string|max:255',
            'sumber_listrik' => 'required|string|max:255',
            'daya_listrik' => 'required|string|max:255',
            'penghasilan' => 'nullable|string|max:255',
            'jumlah_anggota_keluarga' => 'nullable|integer',
            'alasan_pengajuan' => 'required|string',

            'dokumen_ktp' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'dokumen_kk' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'dokumen_pendukung' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        /*
         * Upload dokumen
         */
        if ($request->hasFile('dokumen_ktp')) {
            $validated['dokumen_ktp'] =
                $request->file('dokumen_ktp')
                    ->store('dokumen-pengajuan');
        }

        if ($request->hasFile('dokumen_kk')) {
            $validated['dokumen_kk'] =
                $request->file('dokumen_kk')
                    ->store('dokumen-pengajuan');
        }

        if ($request->hasFile('dokumen_pendukung')) {
            $validated['dokumen_pendukung'] =
                $request->file('dokumen_pendukung')
                    ->store('dokumen-pengajuan');
        }

        /*
         * Status awal
         */
        $validated['status'] = 'Menunggu Verifikasi';

        /*
         * Simpan pengajuan
         */
        $pengajuan = PengajuanBantuan::create($validated);

        return redirect()
            ->route('pengajuan-bantuan.cek-status')
            ->with(
                'success',
                'Pengajuan berhasil dikirim. Nomor pengajuan Anda adalah '
                . $pengajuan->nomor_pengajuan
            );
    }

    /**
     * Menampilkan halaman cek status.
     */
    public function cekStatus()
    {
        return view('pengajuan-bantuan.cek-status');
    }

    /**
     * Menampilkan hasil cek status.
     */
    public function hasilStatus(Request $request)
    {
        $request->validate([
            'nomor_pengajuan' => 'required|string',
        ]);

        $pengajuan = PengajuanBantuan::where(
            'nomor_pengajuan',
            $request->nomor_pengajuan
        )->first();

        /*
         * Ambil riwayat/status terbaru.
         */
        $riwayatTerbaru = null;

        if ($pengajuan) {
            $riwayatTerbaru = $pengajuan
                ->riwayat()
                ->latest('created_at')
                ->first();
        }

        return view(
            'pengajuan-bantuan.hasil-status',
            compact(
                'pengajuan',
                'riwayatTerbaru'
            )
        );
    }
}