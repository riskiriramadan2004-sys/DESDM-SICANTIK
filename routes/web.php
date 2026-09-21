<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\InformationController;
use App\Http\Controllers\Admin\InformationController as AdminInformationController;
use App\Http\Controllers\PengajuanBantuanController;
use App\Http\Controllers\Admin\PengajuanBantuanController as AdminPengajuanBantuanController;

Route::get('/informasi', [InformationController::class, 'index'])
    ->name('information.index');

Route::get('/informasi/{information}', [InformationController::class, 'show'])
    ->name('information.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('informasi', AdminInformationController::class);

Route::get('/pengajuan-bantuan', [AdminPengajuanBantuanController::class, 'index'])
    ->name('pengajuan-bantuan.index');

Route::get('/pengajuan-bantuan/{pengajuanBantuan}', [
    AdminPengajuanBantuanController::class,
    'show'
])->name('pengajuan-bantuan.show');

Route::put('/pengajuan-bantuan/{pengajuanBantuan}/verifikasi', [
    AdminPengajuanBantuanController::class,
    'verifikasi'
])->name('pengajuan-bantuan.verifikasi');

});

Route::get('/pengajuan-bantuan', [PengajuanBantuanController::class, 'create'])
    ->name('pengajuan-bantuan.create');

Route::post('/pengajuan-bantuan', [PengajuanBantuanController::class, 'store'])
    ->name('pengajuan-bantuan.store');

Route::get('/cek-status', [PengajuanBantuanController::class, 'cekStatus'])
    ->name('pengajuan-bantuan.cek-status');

Route::post('/cek-status', [PengajuanBantuanController::class, 'hasilStatus'])
    ->name('pengajuan-bantuan.hasil-status');