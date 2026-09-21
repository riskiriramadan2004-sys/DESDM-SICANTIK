<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengajuanBantuan;
use Illuminate\Http\Request;

class PengajuanBantuanController extends Controller
{
    /**
     * Menampilkan daftar pengajuan bantuan.
     */
    public function index()
    {
        $pengajuan = PengajuanBantuan::latest()->paginate(10);

        return view(
            'admin.pengajuan-bantuan.index',
            compact('pengajuan')
        );
    }

    /**
     * Menampilkan detail pengajuan.
     */
    public function show(PengajuanBantuan $pengajuanBantuan)
    {
        return view(
            'admin.pengajuan-bantuan.show',
            compact('pengajuanBantuan')
        );
    }

    /**
     * Memperbarui status pengajuan.
     */
    public function verifikasi(
    Request $request,
    PengajuanBantuan $pengajuanBantuan
) {
    $request->validate([
        'status' => 'required|in:Diverifikasi,Disetujui,Ditolak',
        'keterangan' => 'nullable|string|max:1000',
    ]);

    $pengajuanBantuan->update([
        'status' => $request->status,
        'catatan_petugas' => $request->keterangan,
    ]);

    return redirect()
        ->route(
            'admin.pengajuan-bantuan.show',
            $pengajuanBantuan
        )
        ->with(
            'success',
            'Status pengajuan berhasil diperbarui.'
        );
}
}