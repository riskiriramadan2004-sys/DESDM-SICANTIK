<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Menampilkan daftar pengaduan.
     */
    public function index()
    {
        $pengaduans = Pengaduan::latest()->paginate(10);

        return view('admin.pengaduan.index', compact('pengaduans'));
    }

    /**
     * Menampilkan detail pengaduan.
     */
    public function show(Pengaduan $pengaduan)
    {
        return view('admin.pengaduan.show', compact('pengaduan'));
    }

    /**
     * Memperbarui status dan tanggapan pengaduan.
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        $validated = $request->validate([
            'status' => 'required|in:Baru,Diproses,Selesai',
            'tanggapan' => 'nullable|string',
        ]);

        $pengaduan->update([
            'status' => $validated['status'],
            'tanggapan' => $validated['tanggapan'] ?? null,
        ]);

        return redirect()
            ->route('admin.pengaduan.show', $pengaduan)
            ->with('success', 'Pengaduan berhasil diperbarui.');
    }

    /**
     * Membuka WhatsApp dengan hasil pengaduan yang sudah diproses.
     */
    public function whatsapp(Pengaduan $pengaduan)
    {
        // Bersihkan nomor HP dari spasi, tanda +, -, dan karakter lainnya
        $nomor = preg_replace('/[^0-9]/', '', $pengaduan->nomor_hp);

        // Jika nomor dimulai dengan 0, ubah menjadi 62
        if (str_starts_with($nomor, '0')) {
            $nomor = '62' . substr($nomor, 1);
        }

        $pesan = "Halo {$pengaduan->nama_lengkap},\n\n"
            . "Berikut hasil pengaduan Anda dari DESDM Sulawesi Tengah.\n\n"
            . "Nomor Pengaduan: {$pengaduan->nomor_pengaduan}\n"
            . "Judul Pengaduan: {$pengaduan->judul}\n"
            . "Status: {$pengaduan->status}\n\n"
            . "Tanggapan:\n"
            . ($pengaduan->tanggapan ?: 'Belum ada tanggapan.')
            . "\n\n"
            . "Terima kasih telah menyampaikan pengaduan kepada DESDM Sulawesi Tengah.";

        $url = 'https://wa.me/' . $nomor . '?text=' . urlencode($pesan);

        return redirect()->away($url);
    }
}