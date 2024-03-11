<?php

use App\Http\Controllers\Backend\CMS\AboutController as CMSAboutController;
use App\Http\Controllers\Backend\CMS\DashboardController as CMSDashboardController;
use App\Http\Controllers\Backend\CMS\KlienController as CMSKlienController;
use App\Http\Controllers\Frontend\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InformasiController;
use App\Http\Controllers\Frontend\LayananController;

/*
|--------------------------------------------------------------------------
| Frontend | Landing Pages
|--------------------------------------------------------------------------
*/

Route::namespace('Frontend')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('/');

    Route::prefix('about')->group(function () {
        Route::get('about-us', [AboutController::class, 'about_us'])->name('about-us');
        Route::get('gallery', [AboutController::class, 'gallery'])->name('gallery');
        Route::get('syarat-dan-ketentuan', [AboutController::class, 'syarat_dan_ketentuan'])->name('syarat-dan-ketentuan');
    });

    Route::prefix('layanan')->group(function () {
        Route::get('pendirian-perusahaan', [LayananController::class, 'pendirian_perusahaan'])->name('pendirian-perusahaan');
        Route::get('sertifikasi-badan-usaha', [LayananController::class, 'notFound'])->name('sertifikasi-badan-usaha');
        Route::get('virtual-office', [LayananController::class, 'virtual_office'])->name('virtual-office');
        Route::get('space-office', [LayananController::class, 'space_office'])->name('space-office');
        Route::get('outsourcing-security', [LayananController::class, 'notFound'])->name('outsourcing-security');
        Route::get('layanan-tambahan', [LayananController::class, 'notFound'])->name('layanan-tambahan');
    });

    Route::prefix('informasi')->group(function () {
        Route::get('kbli', [InformasiController::class, 'kbli'])->name('kbli');
        Route::get('cek-zonasi', [InformasiController::class, 'cek_zonasi'])->name('cek-zonasi');
        Route::get('karir', [InformasiController::class, 'notFound'])->name('karir');
        Route::get('hubungi-kami', [InformasiController::class, 'hubungi_kami'])->name('hubungi-kami');
    });
});


/*
|--------------------------------------------------------------------------
| Backend | Apps
|--------------------------------------------------------------------------
*/
Route::prefix('apps')->namespace('Backend')->group(function () {
    // Route::get('/', [DashboardController::class, 'index'])->name('apps.dashboard');
});


/*
|--------------------------------------------------------------------------
| Backend | Content Management
|--------------------------------------------------------------------------
*/
Route::prefix('cms')->namespace('Backend\CMS')->group(function () {
    Route::get('dashboard', [CMSDashboardController::class, 'index'])->name('cms.dashboard');

    Route::get('klien', [CMSKlienController::class, 'index'])->name('cms.klien');
    Route::get('klien/create', [CMSKlienController::class, 'create'])->name('cms.klien.create');
    Route::post('klien', [CMSKlienController::class, 'store'])->name('cms.klien.store');
    Route::get('klien/{id}/edit', [CMSKlienController::class, 'edit'])->name('cms.klien.edit');
    Route::put('klien/{id}/update', [CMSKlienController::class, 'update'])->name('cms.klien.update');
    Route::delete('klien/{id}', [CMSKlienController::class, 'destroy'])->name('cms.klien.destroy');

    Route::get('about', [CMSAboutController::class, 'index'])->name('cms.about');
    Route::put('about/update', [CMSAboutController::class, 'update'])->name('cms.about.update');
});
