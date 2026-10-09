<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CONTROLLER PUBLIK
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\InformationController;
use App\Http\Controllers\LayananOnlineController;
use App\Http\Controllers\PengajuanBantuanController;
use App\Http\Controllers\PengajuanLayananController;
use App\Http\Controllers\PengaduanController;

/*
|--------------------------------------------------------------------------
| CONTROLLER ADMIN
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\InformationController as AdminInformationController;
use App\Http\Controllers\Admin\PengajuanBantuanController as AdminPengajuanBantuanController;
use App\Http\Controllers\Admin\PengajuanLayananController as AdminPengajuanLayananController;
use App\Http\Controllers\Admin\PengaduanController as AdminPengaduanController;
use App\Http\Controllers\Admin\MonitoringController;
use App\Http\Controllers\Admin\UserController;


/*
|--------------------------------------------------------------------------
| HALAMAN UTAMA WEBSITE
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


/*
|--------------------------------------------------------------------------
| INFORMASI PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/informasi', [
    InformationController::class,
    'index'
])->name('information.index');

Route::get('/informasi/{information}', [
    InformationController::class,
    'show'
])->name('information.show');


/*
|--------------------------------------------------------------------------
| LOGIN ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [
    AuthController::class,
    'showLogin'
])->name('login');

Route::post('/admin/login', [
    AuthController::class,
    'login'
])->name('admin.login');

Route::post('/admin/logout', [
    AuthController::class,
    'logout'
])->name('admin.logout');


/*
|--------------------------------------------------------------------------
| SISTEM ADMIN
|--------------------------------------------------------------------------
|
| Semua route di dalam group ini membutuhkan login.
|
*/

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | DASHBOARD UTAMA ADMIN
        |--------------------------------------------------------------------------
        */

        Route::get('/dashboard', [
            AdminDashboardController::class,
            'index'
        ])->name('dashboard');


        /*
        |--------------------------------------------------------------------------
        | MANAJEMEN USER
        |--------------------------------------------------------------------------
        */

        Route::get('/users', [
            UserController::class,
            'index'
        ])->name('users.index');

        Route::get('/users/create', [
            UserController::class,
            'create'
        ])->name('users.create');

        Route::post('/users', [
            UserController::class,
            'store'
        ])->name('users.store');

        Route::get('/users/{user}/edit', [
            UserController::class,
            'edit'
        ])->name('users.edit');

        Route::put('/users/{user}', [
            UserController::class,
            'update'
        ])->name('users.update');

        Route::delete('/users/{user}', [
            UserController::class,
            'destroy'
        ])->name('users.destroy');


        /*
        |--------------------------------------------------------------------------
        | INFORMASI
        |--------------------------------------------------------------------------
        */

        Route::resource(
            'informasi',
            AdminInformationController::class
        );


        /*
        |--------------------------------------------------------------------------
        | PENGAJUAN BANTUAN LISTRIK
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
        | PENGAJUAN LAYANAN ONLINE
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


        /*
        |--------------------------------------------------------------------------
        | PENGADUAN MASYARAKAT
        |--------------------------------------------------------------------------
        */

        Route::get('/pengaduan', [
            AdminPengaduanController::class,
            'index'
        ])->name('pengaduan.index');

        Route::get('/pengaduan/{pengaduan}', [
            AdminPengaduanController::class,
            'show'
        ])->name('pengaduan.show');

        Route::put('/pengaduan/{pengaduan}', [
            AdminPengaduanController::class,
            'update'
        ])->name('pengaduan.update');

        Route::get('/pengaduan/{pengaduan}/whatsapp', [
            AdminPengaduanController::class,
            'whatsapp'
        ])->name('pengaduan.whatsapp');


        /*
        |--------------------------------------------------------------------------
        | MONITORING
        |--------------------------------------------------------------------------
        */

        Route::get('/monitoring', [
            MonitoringController::class,
            'index'
        ])->name('monitoring.index');

        Route::get('/monitoring/pengajuan-bantuan', [
            MonitoringController::class,
            'bantuan'
        ])->name('monitoring.bantuan');

        Route::get('/monitoring/layanan-online', [
            MonitoringController::class,
            'layanan'
        ])->name('monitoring.layanan');

        Route::get('/monitoring/pengaduan', [
            MonitoringController::class,
            'pengaduan'
        ])->name('monitoring.pengaduan');
    });


/*
|--------------------------------------------------------------------------
| PENGAJUAN BANTUAN LISTRIK - PUBLIK
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
| CEK STATUS PENGAJUAN BANTUAN
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
| LAYANAN ONLINE - PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/layanan-online', [
    LayananOnlineController::class,
    'index'
])->name('layanan-online.index');

Route::get('/layanan-online/{bidangLayanan}', [
    LayananOnlineController::class,
    'show'
])->name('layanan-online.show');

Route::get('/layanan-online/{layanan}/ajukan', [
    PengajuanLayananController::class,
    'create'
])->name('layanan-online.pengajuan.create');

Route::post('/layanan-online/{layanan}/ajukan', [
    PengajuanLayananController::class,
    'store'
])->name('layanan-online.pengajuan.store');

Route::get('/layanan-online/pengajuan/{pengajuanLayanan}/berhasil', [
    PengajuanLayananController::class,
    'berhasil'
])->name('layanan-online.pengajuan.berhasil');


/*
|--------------------------------------------------------------------------
| PENGADUAN MASYARAKAT - PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/pengaduan', [
    PengaduanController::class,
    'create'
])->name('pengaduan.create');

Route::post('/pengaduan', [
    PengaduanController::class,
    'store'
])->name('pengaduan.store');