<?php

use Illuminate\Support\Facades\Route;

// Controller publik
use App\Http\Controllers\InformationController;
use App\Http\Controllers\LayananOnlineController;
use App\Http\Controllers\PengajuanBantuanController;
use App\Http\Controllers\PengajuanLayananController;

// Controller admin
use App\Http\Controllers\Admin\InformationController as AdminInformationController;
use App\Http\Controllers\Admin\PengajuanBantuanController as AdminPengajuanBantuanController;
use App\Http\Controllers\Admin\PengajuanLayananController as AdminPengajuanLayananController;


/*
|--------------------------------------------------------------------------
| Halaman Utama
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Informasi Publik
|--------------------------------------------------------------------------
*/

Route::get('/informasi', [InformationController::class, 'index'])
    ->name('information.index');

Route::get('/informasi/{information}', [InformationController::class, 'show'])
    ->name('information.show');


/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Informasi
    |--------------------------------------------------------------------------
    */

    Route::resource(
        'informasi',
        AdminInformationController::class
    );


    /*
    |--------------------------------------------------------------------------
    | Pengajuan Bantuan
    |--------------------------------------------------------------------------
    */

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


    /*
    |--------------------------------------------------------------------------
    | Pengajuan Layanan Online
    |--------------------------------------------------------------------------
    */

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
});


/*
|--------------------------------------------------------------------------
| Pengajuan Bantuan Listrik - Publik
|--------------------------------------------------------------------------
*/

Route::get('/pengajuan-bantuan', [
    PengajuanBantuanController::class,
    'create'
])->name('pengajuan-bantuan.create');

Route::post('/pengajuan-bantuan', [
    PengajuanBantuanController::class,
    'store'
])->name('pengajuan-bantuan.store');


/*
|--------------------------------------------------------------------------
| Cek Status
|--------------------------------------------------------------------------
*/

Route::get('/cek-status', [
    PengajuanBantuanController::class,
    'cekStatus'
])->name('pengajuan-bantuan.cek-status');

Route::post('/cek-status', [
    PengajuanBantuanController::class,
    'hasilStatus'
])->name('pengajuan-bantuan.hasil-status');


/*
|--------------------------------------------------------------------------
| Layanan Online
|--------------------------------------------------------------------------
*/

// Halaman utama layanan online
Route::get('/layanan-online', [
    LayananOnlineController::class,
    'index'
])->name('layanan-online.index');

// Pengajuan layanan
Route::get('/layanan-online/{layanan}/ajukan', [
    PengajuanLayananController::class,
    'create'
])->name('layanan-online.pengajuan.create');

Route::post('/layanan-online/{layanan}/ajukan', [
    PengajuanLayananController::class,
    'store'
])->name('layanan-online.pengajuan.store');

// Halaman bidang layanan
Route::get('/layanan-online/{bidangLayanan}', [
    LayananOnlineController::class,
    'show'
])->name('layanan-online.show');

// Pengajuan berhasil
Route::get('/layanan-online/pengajuan/{pengajuanLayanan}/berhasil', [
    PengajuanLayananController::class,
    'berhasil'
])->name('layanan-online.pengajuan.berhasil');