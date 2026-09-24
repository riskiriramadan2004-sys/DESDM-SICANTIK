<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengajuanBantuan;
use App\Models\PengajuanLayanan;
use App\Models\Layanan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    /**
     * Halaman utama monitoring.
     */
    public function index()
    {
        return view('admin.monitoring.index');
    }

    /**
     * Monitoring Pengajuan Bantuan.
     */
    public function bantuan(Request $request)
    {
        $query = PengajuanBantuan::query();

        // Pencarian nomor pengajuan
        if ($request->filled('nomor_pengajuan')) {
            $query->where(
                'nomor_pengajuan',
                'like',
                '%' . $request->nomor_pengajuan . '%'
            );
        }

        // Filter status
        if ($request->filled('status')) {
            $query->where(
                'status',
                $request->status
            );
        }

        // Filter tanggal mulai
        if ($request->filled('tanggal_mulai')) {
            $query->whereDate(
                'created_at',
                '>=',
                $request->tanggal_mulai
            );
        }

        // Filter tanggal akhir
        if ($request->filled('tanggal_akhir')) {
            $query->whereDate(
                'created_at',
                '<=',
                $request->tanggal_akhir
            );
        }

        $pengajuan = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view(
            'admin.monitoring.bantuan',
            compact('pengajuan')
        );
    }

    /**
     * Detail monitoring pengajuan bantuan.
     */
    public function bantuanDetail(
        PengajuanBantuan $pengajuanBantuan
    ) {
        $pengajuanBantuan->load('riwayat');

        return view(
            'admin.monitoring.bantuan-detail',
            compact('pengajuanBantuan')
        );
    }

    /**
     * Monitoring Pengajuan Layanan Online.
     */
    public function layanan(Request $request)
    {
        $query = PengajuanLayanan::with('layanan');

        // Pencarian nomor pengajuan
        if ($request->filled('nomor_pengajuan')) {
            $query->where(
                'nomor_pengajuan',
                'like',
                '%' . $request->nomor_pengajuan . '%'
            );
        }

        // Filter berdasarkan layanan
        if ($request->filled('layanan_id')) {
            $query->where(
                'layanan_id',
                $request->layanan_id
            );
        }

        // Filter berdasarkan status
        if ($request->filled('status')) {
            $query->where(
                'status',
                $request->status
            );
        }

        // Filter tanggal mulai
        if ($request->filled('tanggal_mulai')) {
            $query->whereDate(
                'created_at',
                '>=',
                $request->tanggal_mulai
            );
        }

        // Filter tanggal akhir
        if ($request->filled('tanggal_akhir')) {
            $query->whereDate(
                'created_at',
                '<=',
                $request->tanggal_akhir
            );
        }

        $pengajuan = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        // Ambil daftar layanan untuk dropdown filter
        $layanan = Layanan::orderBy('nama')->get();

        return view(
            'admin.monitoring.layanan',
            compact('pengajuan', 'layanan')
        );
    }

    /**
     * Monitoring Pengaduan Masyarakat.
     */
    public function pengaduan(Request $request)
    {
        $query = Pengaduan::query();

        // Pencarian nomor pengaduan
        if ($request->filled('nomor_pengaduan')) {
            $query->where(
                'nomor_pengaduan',
                'like',
                '%' . $request->nomor_pengaduan . '%'
            );
        }

        // Filter kategori
        if ($request->filled('kategori')) {
            $query->where(
                'kategori',
                $request->kategori
            );
        }

        // Filter status
        if ($request->filled('status')) {
            $query->where(
                'status',
                $request->status
            );
        }

        // Filter tanggal mulai
        if ($request->filled('tanggal_mulai')) {
            $query->whereDate(
                'created_at',
                '>=',
                $request->tanggal_mulai
            );
        }

        // Filter tanggal akhir
        if ($request->filled('tanggal_akhir')) {
            $query->whereDate(
                'created_at',
                '<=',
                $request->tanggal_akhir
            );
        }

        $pengaduan = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        // Ambil kategori yang tersedia
        $kategori = Pengaduan::query()
            ->whereNotNull('kategori')
            ->where('kategori', '!=', '')
            ->distinct()
            ->orderBy('kategori')
            ->pluck('kategori');

        return view(
            'admin.monitoring.pengaduan',
            compact('pengaduan', 'kategori')
        );
    }
}