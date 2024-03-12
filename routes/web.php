<?php

use App\Http\Controllers\Backend\CMS\About\AboutController as CMSAboutController;
use App\Http\Controllers\Backend\CMS\About\GalleryController as CMSGalleryController;
use App\Http\Controllers\Backend\CMS\About\SNKController as CMSSNKController;
use App\Http\Controllers\Backend\CMS\Informasi\KBLIController as CMSKBLIController;
use App\Http\Controllers\Backend\CMS\Informasi\KontakMasukController as CMSKontakMasukController;
use App\Http\Controllers\Backend\CMS\DashboardController as CMSDashboardController;
use App\Http\Controllers\Backend\CMS\KlienController as CMSKlienController;
use App\Http\Controllers\Backend\CMS\Layanan\SpaceOfficeController as CMSSpaceOfficeController;
use App\Http\Controllers\Backend\CMS\Layanan\VirtualOfficeController as CMSVirtualOfficeController;
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
        Route::post('hubungi-kami', [InformasiController::class, 'hubungi_kami_store'])->name('hubungi-kami.store');
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

    Route::get('gallery', [CMSGalleryController::class, 'index'])->name('cms.gallery');
    Route::get('gallery/create', [CMSGalleryController::class, 'create'])->name('cms.gallery.create');
    Route::post('gallery', [CMSGalleryController::class, 'store'])->name('cms.gallery.store');
    Route::get('gallery/{id}/edit', [CMSGalleryController::class, 'edit'])->name('cms.gallery.edit');
    Route::put('gallery/{id}/update', [CMSGalleryController::class, 'update'])->name('cms.gallery.update');
    Route::delete('gallery/{id}', [CMSGalleryController::class, 'destroy'])->name('cms.gallery.destroy');

    Route::get('snk', [CMSSNKController::class, 'index'])->name('cms.snk');
    Route::put('snk/update', [CMSSNKController::class, 'update'])->name('cms.snk.update');

    Route::prefix('informasi')->namespace('Backend\CMS')->group(function () {
        Route::get('kbli', [CMSKBLIController::class, 'index'])->name('cms.kbli');
        Route::put('kbli/update', [CMSKBLIController::class, 'update'])->name('cms.kbli.update');

        Route::get('kontak-masuk', [CMSKontakMasukController::class, 'index'])->name('cms.kontak-masuk');
        Route::delete('kontak-masuk/{id}', [CMSKontakMasukController::class, 'destroy'])->name('cms.kontak-masuk.destroy');
    });

    Route::prefix('layanan')->namespace('Backend\CMS')->group(function () {
        Route::get('virtual_office', [CMSVirtualOfficeController::class, 'index'])->name('cms.virtual_office');
        Route::get('virtual_office/create', [CMSVirtualOfficeController::class, 'create'])->name('cms.virtual_office.create');
        Route::post('virtual_office', [CMSVirtualOfficeController::class, 'store'])->name('cms.virtual_office.store');
        Route::get('virtual_office/{id}/edit', [CMSVirtualOfficeController::class, 'edit'])->name('cms.virtual_office.edit');
        Route::put('virtual_office/{id}/update', [CMSVirtualOfficeController::class, 'update'])->name('cms.virtual_office.update');
        Route::delete('virtual_office/{id}', [CMSVirtualOfficeController::class, 'destroy'])->name('cms.virtual_office.destroy');
        // Next Route Deskripsi Layanan
        Route::get('virtual_office/{id}/list', [CMSVirtualOfficeController::class, 'list'])->name('cms.virtual_office.list');
        Route::post('virtual_office/{id}/list_store', [CMSVirtualOfficeController::class, 'list_store'])->name('cms.virtual_office.list_store');
        Route::put('virtual_office/list_update/{id}', [CMSVirtualOfficeController::class, 'list_update'])->name('cms.virtual_office.list_update');
        Route::delete('virtual_office/list_destroy/{id}', [CMSVirtualOfficeController::class, 'list_destroy'])->name('cms.virtual_office.list_destroy');

        Route::get('space_office', [CMSSpaceOfficeController::class, 'index'])->name('cms.space_office');
        Route::put('space_office/update', [CMSSpaceOfficeController::class, 'update'])->name('cms.space_office.update');
    });
});
