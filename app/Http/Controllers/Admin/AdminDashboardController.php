<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Pegawai;
use App\Models\Pengaduan;
use App\Models\PengajuanBantuan;
use App\Models\PengajuanLayanan;
use App\Models\User;
use App\Models\BeritaAcara;

class AdminDashboardController extends Controller
{
    /**
     * Dashboard utama Super Admin.
     */
    public function index()
    {
        // Total seluruh akun administrator.
        $jumlahAdmin = User::whereIn('role', [
            'super_admin',
            'admin_informasi',
            'admin_pengaduan',
            'admin_bantuan',
            'admin_layanan',
        ])->count();

        // Total pegawai dari tabel pegawais.
        $jumlahInformasi = Pegawai::count();

        // Total pengaduan masyarakat.
        $jumlahPengaduan = Pengaduan::count();

        // Total pengajuan bantuan listrik.
        $jumlahBantuan = PengajuanBantuan::count();

        // Total pengajuan layanan online.
        $jumlahLayanan = PengajuanLayanan::count();

        // Delapan aktivitas administrator terbaru.
        $aktivitasTerbaru = ActivityLog::with('user')
            ->latest()
            ->take(8)
            ->get();

        // Lima Berita Acara terbaru.
        $beritaAcaras = BeritaAcara::latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', [
            'jumlahAdmin' => $jumlahAdmin,
            'jumlahInformasi' => $jumlahInformasi,
            'jumlahPengaduan' => $jumlahPengaduan,
            'jumlahBantuan' => $jumlahBantuan,
            'jumlahLayanan' => $jumlahLayanan,
            'aktivitasTerbaru' => $aktivitasTerbaru,
            'beritaAcaras' => $beritaAcaras,
        ]);
    }
}
