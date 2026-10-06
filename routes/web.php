<?php

use Illuminate\Support\Facades\Route;

// =====================================================
// CONTROLLER PUBLIK
// =====================================================

use App\Http\Controllers\InformationController;
use App\Http\Controllers\LayananOnlineController;
use App\Http\Controllers\PengajuanBantuanController;
use App\Http\Controllers\PengajuanLayananController;
use App\Http\Controllers\PengaduanController;

// =====================================================
// CONTROLLER ADMIN
// =====================================================

use App\Http\Controllers\Admin\InformationController as AdminInformationController;
use App\Http\Controllers\Admin\PengajuanBantuanController as AdminPengajuanBantuanController;
use App\Http\Controllers\Admin\PengajuanLayananController as AdminPengajuanLayananController;
use App\Http\Controllers\Admin\PengaduanController as AdminPengaduanController;

// BARU - TAHAP 4
use App\Http\Controllers\Admin\MonitoringController;


// =====================================================
// HALAMAN UTAMA
// =====================================================

Route::get('/', function () {
    return view('welcome');
});


// =====================================================
// INFORMASI PUBLIK
// =====================================================

Route::get('/informasi', [
    InformationController::class,
    'index'
])->name('information.index');

Route::get('/informasi/{information}', [
    InformationController::class,
    'show'
])->name('information.show');


// =====================================================
// ADMIN
// =====================================================

Route::prefix('admin')->name('admin.')->group(function () {

    // -------------------------------------------------
    // Informasi
    // -------------------------------------------------

    Route::resource(
        'informasi',
        AdminInformationController::class
    );


    // -------------------------------------------------
    // Pengajuan Bantuan Listrik
    // -------------------------------------------------

    Route::get('/pengajuan-bantuan', [
        AdminPengajuanBantuanController::class,
        'index'
    ])->name('pengajuan-bantuan.index');

    Route::get('/pengajuan-bantuan/{pengajuanBantuan}', [
        AdminPengajuanBantuanController::class,
        'show'
    ])->name('pengajuan-bantuan.show');

    Route::get('/pengajuan-bantuan/{pengajuanBantuan}/dokumen/{jenis}', [
        AdminPengajuanBantuanController::class,
        'dokumen'
    ])->name('pengajuan-bantuan.dokumen');

    Route::put('/pengajuan-bantuan/{pengajuanBantuan}/verifikasi', [
        AdminPengajuanBantuanController::class,
        'verifikasi'
    ])->name('pengajuan-bantuan.verifikasi');


    // -------------------------------------------------
    // Pengajuan Layanan Online
    // -------------------------------------------------

    Route::get('/pengajuan-layanan', [
        AdminPengajuanLayananController::class,
        'index'
    ])->name('pengajuan-layanan.index');

    Route::get('/pengajuan-layanan/{pengajuanLayanan}', [
        AdminPengajuanLayananController::class,
        'show'
    ])->name('pengajuan-layanan.show');

    Route::put('/pengajuan-layanan/{pengajuanLayanan}/verifikasi', [
        AdminPengajuanLayananController::class,
        'verifikasi'
    ])->name('pengajuan-layanan.verifikasi');


    // -------------------------------------------------
    // Pengaduan Masyarakat - ADMIN
    // -------------------------------------------------

    // Daftar pengaduan
    Route::get('/pengaduan', [
        AdminPengaduanController::class,
        'index'
    ])->name('pengaduan.index');

    // Detail pengaduan
    Route::get('/pengaduan/{pengaduan}', [
        AdminPengaduanController::class,
        'show'
    ])->name('pengaduan.show');

    // Update status dan tanggapan
    Route::put('/pengaduan/{pengaduan}', [
        AdminPengaduanController::class,
        'update'
    ])->name('pengaduan.update');

    // Kirim hasil pengaduan melalui WhatsApp
    Route::get('/pengaduan/{pengaduan}/whatsapp', [
        AdminPengaduanController::class,
        'whatsapp'
    ])->name('pengaduan.whatsapp');


    // =================================================
    // MONITORING - TAHAP 4
    // =================================================

    Route::get('/monitoring', [
        MonitoringController::class,
        'index'
    ])->name('monitoring.index');


    // =================================================
    // MONITORING PENGAJUAN BANTUAN - TAHAP 4
    // =================================================

    Route::get('/monitoring/pengajuan-bantuan', [
        MonitoringController::class,
        'bantuan'
    ])->name('monitoring.bantuan');


    // =================================================
    // MONITORING PENGAJUAN LAYANAN ONLINE - TAHAP 4
    // =================================================

    Route::get('/monitoring/layanan-online', [
        MonitoringController::class,
        'layanan'
    ])->name('monitoring.layanan');


    // =================================================
    // MONITORING PENGADUAN MASYARAKAT - TAHAP 4
    // =================================================

    Route::get('/monitoring/pengaduan', [
        MonitoringController::class,
        'pengaduan'
    ])->name('monitoring.pengaduan');

});


// =====================================================
// PENGAJUAN BANTUAN LISTRIK - PUBLIK
// =====================================================

Route::get('/pengajuan-bantuan', [
    PengajuanBantuanController::class,
    'create'
])->name('pengajuan-bantuan.create');

Route::post('/pengajuan-bantuan', [
    PengajuanBantuanController::class,
    'store'
])->name('pengajuan-bantuan.store');


// =====================================================
// CEK STATUS PENGAJUAN BANTUAN
// =====================================================

Route::get('/cek-status', [
    PengajuanBantuanController::class,
    'cekStatus'
])->name('pengajuan-bantuan.cek-status');

Route::post('/cek-status', [
    PengajuanBantuanController::class,
    'hasilStatus'
])->name('pengajuan-bantuan.hasil-status');


// =====================================================
// LAYANAN ONLINE
// =====================================================

// Halaman utama layanan online
Route::get('/layanan-online', [
    LayananOnlineController::class,
    'index'
])->name('layanan-online.index');

// Halaman bidang layanan
Route::get('/layanan-online/{bidangLayanan}', [
    LayananOnlineController::class,
    'show'
])->name('layanan-online.show');

// Form pengajuan layanan
Route::get('/layanan-online/{layanan}/ajukan', [
    PengajuanLayananController::class,
    'create'
])->name('layanan-online.pengajuan.create');

// Submit pengajuan layanan
Route::post('/layanan-online/{layanan}/ajukan', [
    PengajuanLayananController::class,
    'store'
])->name('layanan-online.pengajuan.store');

// Halaman pengajuan berhasil
Route::get('/layanan-online/pengajuan/{pengajuanLayanan}/berhasil', [
    PengajuanLayananController::class,
    'berhasil'
])->name('layanan-online.pengajuan.berhasil');


// =====================================================
// PENGADUAN MASYARAKAT - PUBLIK
// =====================================================

// Form pengaduan
Route::get('/pengaduan', [
    PengaduanController::class,
    'create'
])->name('pengaduan.create');

// Submit pengaduan
Route::post('/pengaduan', [
    PengaduanController::class,
    'store'
])->name('pengaduan.store');