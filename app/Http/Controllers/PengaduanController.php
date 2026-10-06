<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Menampilkan form pengaduan.
     */
    public function create()
    {
        return view('pengaduan.create');
    }

    /**
     * Menyimpan pengaduan masyarakat.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:20',
            'kategori' => 'required|string|max:100',
            'judul' => 'required|string|max:255',
            'isi_pengaduan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        /*
         * Membuat nomor pengaduan otomatis.
         * Contoh:
         * ESDM-PDG-20260922-0001
         */
        $nomorPengaduan = 'ESDM-PDG-' . now()->format('Ymd') . '-' .
            str_pad(
                (Pengaduan::whereDate('created_at', today())->count() + 1),
                4,
                '0',
                STR_PAD_LEFT
            );

        /*
         * Upload foto jika ada.
         */
        $foto = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store(
                'pengaduan/foto',
                'public'
            );
        }

        /*
         * Upload dokumen jika ada.
         */
        $dokumen = null;

        if ($request->hasFile('dokumen')) {
            $dokumen = $request->file('dokumen')->store(
                'pengaduan/dokumen',
                'public'
            );
        }

        /*
         * Simpan pengaduan.
         */
        $pengaduan = Pengaduan::create([
            'nomor_pengaduan' => $nomorPengaduan,
            'nama_lengkap' => $request->nama_lengkap,
            'nomor_hp' => $request->nomor_hp,
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            'isi_pengaduan' => $request->isi_pengaduan,
            'foto' => $foto,
            'dokumen' => $dokumen,

            // Status awal sesuai database
            'status' => 'Baru',

            'tanggapan' => null,
        ]);

        return view('pengaduan.berhasil', compact('pengaduan'));
    }
}