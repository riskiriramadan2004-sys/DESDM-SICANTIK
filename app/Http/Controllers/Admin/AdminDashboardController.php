<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Information;
use App\Models\Pengaduan;
use App\Models\PengajuanBantuan;
use App\Models\PengajuanLayanan;
use App\Models\User;

class AdminDashboardController extends Controller
{
    /**
     * Dashboard utama Super Admin.
     */
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | TOTAL ADMIN
        |--------------------------------------------------------------------------
        | Hanya menghitung akun yang memang memiliki role administrator.
        */

        $jumlahAdmin = User::whereIn('role', [
            'super_admin',
            'admin_informasi',
            'admin_pengaduan',
            'admin_bantuan',
            'admin_layanan',
        ])->count();


        /*
        |--------------------------------------------------------------------------
        | TOTAL INFORMASI
        |--------------------------------------------------------------------------
        | Jumlah informasi yang dikelola oleh Admin Informasi.
        */

        $jumlahInformasi = Information::count();


        /*
        |--------------------------------------------------------------------------
        | TOTAL PENGADUAN
        |--------------------------------------------------------------------------
        | Jumlah seluruh pengaduan masyarakat yang masuk.
        */

        $jumlahPengaduan = Pengaduan::count();


        /*
        |--------------------------------------------------------------------------
        | TOTAL PENGAJUAN BANTUAN LISTRIK
        |--------------------------------------------------------------------------
        | Jumlah seluruh pengajuan bantuan listrik.
        */

        $jumlahBantuan = PengajuanBantuan::count();


        /*
        |--------------------------------------------------------------------------
        | TOTAL PENGAJUAN LAYANAN ONLINE
        |--------------------------------------------------------------------------
        | Jumlah seluruh pengajuan layanan online.
        */

        $jumlahLayanan = PengajuanLayanan::count();


        /*
        |--------------------------------------------------------------------------
        | AKTIVITAS SISTEM TERBARU
        |--------------------------------------------------------------------------
        | Mengambil 8 aktivitas terakhir dari seluruh administrator.
        */

        $aktivitasTerbaru = ActivityLog::with('user')
            ->latest()
            ->take(8)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | KIRIM DATA KE DASHBOARD
        |--------------------------------------------------------------------------
        */

        return view('admin.dashboard', [
            'jumlahAdmin'      => $jumlahAdmin,
            'jumlahInformasi'  => $jumlahInformasi,
            'jumlahPengaduan'  => $jumlahPengaduan,
            'jumlahBantuan'    => $jumlahBantuan,
            'jumlahLayanan'    => $jumlahLayanan,
            'aktivitasTerbaru' => $aktivitasTerbaru,
        ]);
    }
}