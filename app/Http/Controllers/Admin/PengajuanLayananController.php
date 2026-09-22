<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengajuanLayanan;
use Illuminate\Http\Request;

class PengajuanLayananController extends Controller
{
    /**
     * Menampilkan semua pengajuan layanan.
     */
    public function index()
    {
        $pengajuanLayanans = PengajuanLayanan::with(
            'layanan.bidangLayanan'
        )
            ->latest()
            ->paginate(10);

        return view(
            'admin.pengajuan-layanan.index',
            compact('pengajuanLayanans')
        );
    }

    /**
     * Menampilkan detail pengajuan layanan.
     */
    public function show(PengajuanLayanan $pengajuanLayanan)
    {
        $pengajuanLayanan->load(
            'layanan.bidangLayanan'
        );

        return view(
            'admin.pengajuan-layanan.show',
            compact('pengajuanLayanan')
        );
    }

    /**
     * Memperbarui status pengajuan layanan.
     */
    public function verifikasi(
        Request $request,
        PengajuanLayanan $pengajuanLayanan
    ) {
        $validated = $request->validate([
            'status' => [
                'required',
                'in:Menunggu Verifikasi,Diverifikasi,Disetujui,Ditolak',
            ],

            'keterangan' => [
                'nullable',
                'string',
                'max:1000',
            ],
        ]);

        $pengajuanLayanan->update([
            'status' => $validated['status'],
            'catatan_petugas' => $validated['keterangan'] ?? null,
        ]);

        return redirect()
            ->route(
                'admin.pengajuan-layanan.show',
                $pengajuanLayanan
            )
            ->with(
                'success',
                'Status pengajuan layanan berhasil diperbarui.'
            );
    }
}