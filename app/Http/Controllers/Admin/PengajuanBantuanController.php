<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengajuanBantuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
     * Menampilkan dokumen pengajuan.
     */
    public function dokumen(
        PengajuanBantuan $pengajuanBantuan,
        string $jenis
    ) {
        $dokumen = match ($jenis) {
            'ktp' => $pengajuanBantuan->dokumen_ktp,
            'kk' => $pengajuanBantuan->dokumen_kk,
            'pendukung' => $pengajuanBantuan->dokumen_pendukung,
            default => null,
        };

        // Jenis dokumen tidak valid
        if (!$dokumen) {
            abort(404, 'Dokumen tidak ditemukan.');
        }

        // Cek apakah file benar-benar ada
        if (!Storage::disk('local')->exists($dokumen)) {
            abort(404, 'File dokumen tidak ditemukan.');
        }

        // Tampilkan file langsung di browser
        return Storage::disk('local')->response($dokumen);
    }

    /**
     * Memperbarui status pengajuan.
     */
    public function verifikasi(
        Request $request,
        PengajuanBantuan $pengajuanBantuan
    ) {
        $request->validate([
            'status' => [
                'required',
                'in:Diverifikasi,Disetujui,Ditolak',
            ],

            'keterangan' => [
                'nullable',
                'string',
                'max:1000',
            ],
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