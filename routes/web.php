<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\InformationController;
use App\Http\Controllers\Admin\InformationController as AdminInformationController;

Route::get('/informasi', [InformationController::class, 'index'])
    ->name('information.index');

Route::get('/informasi/{information}', [InformationController::class, 'show'])
    ->name('information.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('informasi', AdminInformationController::class);
});