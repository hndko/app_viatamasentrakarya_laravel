<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\LayananController;
use App\Http\Controllers\Frontend\InformasiController;
use App\Http\Controllers\Backend\CMS\KlienController as CMSKlienController;
use App\Http\Controllers\Backend\CMS\About\SNKController as CMSSNKController;
use App\Http\Controllers\Backend\CMS\About\AboutController as CMSAboutController;
use App\Http\Controllers\Backend\CMS\DashboardController as CMSDashboardController;
use App\Http\Controllers\Backend\CMS\Informasi\KBLIController as CMSKBLIController;
use App\Http\Controllers\Backend\APPS\DashboardController as APPSDashboardController;
use App\Http\Controllers\Backend\APPS\HrGaController as APPSHrGaController;
use App\Http\Controllers\Backend\APPS\MasterData\DaftarPerusahaanController as APPSDaftarPerusahaanController;
use App\Http\Controllers\Backend\APPS\PendirianPerusahaanController as APPSPendirianPerusahaanController;
use App\Http\Controllers\Backend\APPS\SpaceOfficeController as APPSSpaceOfficeController;
use App\Http\Controllers\Backend\APPS\VendorController as APPSVendorController;
use App\Http\Controllers\Backend\APPS\VirtualOfficeController as APPSVirtualOfficeController;
use App\Http\Controllers\Backend\CMS\About\GalleryController as CMSGalleryController;
use App\Http\Controllers\Backend\CMS\Layanan\SpaceOfficeController as CMSSpaceOfficeController;
use App\Http\Controllers\Backend\CMS\Informasi\KontakMasukController as CMSKontakMasukController;
use App\Http\Controllers\Backend\CMS\Layanan\VirtualOfficeController as CMSVirtualOfficeController;
use App\Http\Controllers\Backend\CMS\Layanan\PendirianPerusahaanController as CMSPendirianPerusahaanController;

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
Route::prefix('apps')->namespace('Backend\APPS')->group(function () {
    // Route::get('/', [DashboardController::class, 'index'])->name('apps.dashboard');
    Route::get('dashboard', [APPSDashboardController::class, 'index'])->name('apps.dashboard');

    Route::prefix('informasi')->namespace('Backend\APPS')->group(function () {
        Route::get('daftar_perusahaan', [APPSDaftarPerusahaanController::class, 'index'])->name('apps.daftar_perusahaan');
        Route::get('daftar_perusahaan/create', [APPSDaftarPerusahaanController::class, 'create'])->name('apps.daftar_perusahaan.create');
        Route::post('daftar_perusahaan', [APPSDaftarPerusahaanController::class, 'store'])->name('apps.daftar_perusahaan.store');
        Route::get('daftar_perusahaan/{id}/edit', [APPSDaftarPerusahaanController::class, 'edit'])->name('apps.daftar_perusahaan.edit');
        Route::put('daftar_perusahaan/{id}/update', [APPSDaftarPerusahaanController::class, 'update'])->name('apps.daftar_perusahaan.update');
        Route::delete('daftar_perusahaan/{id}', [APPSDaftarPerusahaanController::class, 'destroy'])->name('apps.daftar_perusahaan.destroy');
    });

    Route::get('virtual_office', [APPSVirtualOfficeController::class, 'index'])->name('apps.virtual_office');
    Route::get('virtual_office/create', [APPSVirtualOfficeController::class, 'create'])->name('apps.virtual_office.create');
    Route::post('virtual_office', [APPSVirtualOfficeController::class, 'store'])->name('apps.virtual_office.store');
    Route::get('virtual_office/{id}/edit', [APPSVirtualOfficeController::class, 'edit'])->name('apps.virtual_office.edit');
    Route::put('virtual_office/{id}/update', [APPSVirtualOfficeController::class, 'update'])->name('apps.virtual_office.update');
    Route::delete('virtual_office/{id}', [APPSVirtualOfficeController::class, 'destroy'])->name('apps.virtual_office.destroy');

    Route::get('pendirian_perusahaan', [APPSPendirianPerusahaanController::class, 'index'])->name('apps.pendirian_perusahaan');
    Route::get('pendirian_perusahaan/create', [APPSPendirianPerusahaanController::class, 'create'])->name('apps.pendirian_perusahaan.create');
    Route::post('pendirian_perusahaan', [APPSPendirianPerusahaanController::class, 'store'])->name('apps.pendirian_perusahaan.store');
    Route::get('pendirian_perusahaan/{id}/edit', [APPSPendirianPerusahaanController::class, 'edit'])->name('apps.pendirian_perusahaan.edit');
    Route::put('pendirian_perusahaan/{id}/update', [APPSPendirianPerusahaanController::class, 'update'])->name('apps.pendirian_perusahaan.update');
    Route::delete('pendirian_perusahaan/{id}', [APPSPendirianPerusahaanController::class, 'destroy'])->name('apps.pendirian_perusahaan.destroy');

    Route::get('space_office', [APPSSpaceOfficeController::class, 'index'])->name('apps.space_office');
    Route::get('space_office/create', [APPSSpaceOfficeController::class, 'create'])->name('apps.space_office.create');
    Route::post('space_office', [APPSSpaceOfficeController::class, 'store'])->name('apps.space_office.store');
    Route::get('space_office/{id}/edit', [APPSSpaceOfficeController::class, 'edit'])->name('apps.space_office.edit');
    Route::put('space_office/{id}/update', [APPSSpaceOfficeController::class, 'update'])->name('apps.space_office.update');
    Route::delete('space_office/{id}', [APPSSpaceOfficeController::class, 'destroy'])->name('apps.space_office.destroy');

    Route::get('vendor', [APPSVendorController::class, 'index'])->name('apps.vendor');
    Route::get('vendor/create', [APPSVendorController::class, 'create'])->name('apps.vendor.create');
    Route::post('vendor', [APPSVendorController::class, 'store'])->name('apps.vendor.store');
    Route::get('vendor/{id}/edit', [APPSVendorController::class, 'edit'])->name('apps.vendor.edit');
    Route::put('vendor/{id}/update', [APPSVendorController::class, 'update'])->name('apps.vendor.update');
    Route::delete('vendor/{id}', [APPSVendorController::class, 'destroy'])->name('apps.vendor.destroy');

    Route::get('hrga', [APPSHrGaController::class, 'index'])->name('apps.hrga');
    Route::get('hrga/create', [APPSHrGaController::class, 'create'])->name('apps.hrga.create');
    Route::post('hrga', [APPSHrGaController::class, 'store'])->name('apps.hrga.store');
    Route::get('hrga/{id}/edit', [APPSHrGaController::class, 'edit'])->name('apps.hrga.edit');
    Route::put('hrga/{id}/update', [APPSHrGaController::class, 'update'])->name('apps.hrga.update');
    Route::delete('hrga/{id}', [APPSHrGaController::class, 'destroy'])->name('apps.hrga.destroy');
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
        // Next Route Deskripsi Layanan Virtual Office
        Route::get('virtual_office/{id}/list', [CMSVirtualOfficeController::class, 'list'])->name('cms.virtual_office.list');
        Route::post('virtual_office/{id}/list_store', [CMSVirtualOfficeController::class, 'list_store'])->name('cms.virtual_office.list_store');
        Route::put('virtual_office/list_update/{id}', [CMSVirtualOfficeController::class, 'list_update'])->name('cms.virtual_office.list_update');
        Route::delete('virtual_office/list_destroy/{id}', [CMSVirtualOfficeController::class, 'list_destroy'])->name('cms.virtual_office.list_destroy');

        Route::get('pendirian_perusahaan', [CMSPendirianPerusahaanController::class, 'index'])->name('cms.pendirian_perusahaan');
        Route::get('pendirian_perusahaan/create', [CMSPendirianPerusahaanController::class, 'create'])->name('cms.pendirian_perusahaan.create');
        Route::post('pendirian_perusahaan', [CMSPendirianPerusahaanController::class, 'store'])->name('cms.pendirian_perusahaan.store');
        Route::get('pendirian_perusahaan/{id}/edit', [CMSPendirianPerusahaanController::class, 'edit'])->name('cms.pendirian_perusahaan.edit');
        Route::put('pendirian_perusahaan/{id}/update', [CMSPendirianPerusahaanController::class, 'update'])->name('cms.pendirian_perusahaan.update');
        Route::delete('pendirian_perusahaan/{id}', [CMSPendirianPerusahaanController::class, 'destroy'])->name('cms.pendirian_perusahaan.destroy');
        // Next Route Deskripsi Layanan Pendirian Perusahaan
        Route::get('pendirian_perusahaan/{id}/list', [CMSPendirianPerusahaanController::class, 'list'])->name('cms.pendirian_perusahaan.list');
        Route::post('pendirian_perusahaan/{id}/list_store', [CMSPendirianPerusahaanController::class, 'list_store'])->name('cms.pendirian_perusahaan.list_store');
        Route::put('pendirian_perusahaan/list_update/{id}', [CMSPendirianPerusahaanController::class, 'list_update'])->name('cms.pendirian_perusahaan.list_update');
        Route::delete('pendirian_perusahaan/list_destroy/{id}', [CMSPendirianPerusahaanController::class, 'list_destroy'])->name('cms.pendirian_perusahaan.list_destroy');

        Route::get('space_office', [CMSSpaceOfficeController::class, 'index'])->name('cms.space_office');
        Route::put('space_office/update', [CMSSpaceOfficeController::class, 'update'])->name('cms.space_office.update');
    });
});
