<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::get('404', function () {
    abort(404);
});

/*
|--------------------------------------------------------------------------
| Frontend | Landing Pages
|--------------------------------------------------------------------------
*/

Route::namespace('Frontend')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('/');
});


/*
|--------------------------------------------------------------------------
| Backend | Apps
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->namespace('Backend')->group(function () {
    // Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
});


/*
|--------------------------------------------------------------------------
| Backend | Content Management
|--------------------------------------------------------------------------
*/
