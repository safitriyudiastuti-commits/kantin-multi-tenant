<?php

use App\Http\Controllers\Admin\AdminDiningTableController;
use Illuminate\Support\Facades\Route;

/**
 * Konteks PENGELOLA KANTIN (internal). Prefix: admin, name: admin.*
 * Grup (prefix/name/middleware auth+verified+role:admin) didefinisikan tunggal di PortalRoutes::admin();
 * route fitur ditambahkan oleh modul di app/Modules/{Modul}/routes/admin.php.
 * Administrasi tenant/role/komisi/rekening (Modul 5): app/Modules/Admin/routes/admin.php.
 * Policy per-aksi (TenantPolicy) diperiksa di controller modul.
 */
Route::get('/dashboard', fn () => view('admin.dashboard'))->name('dashboard');
require app_path('Modules/Admin/routes/admin.php');

Route::get('/withdrawals', fn () => view('admin.withdrawals'))->name('withdrawals.index');

Route::get('/tables', [AdminDiningTableController::class, 'index'])->name('tables.index');
Route::post('/tables', [AdminDiningTableController::class, 'store'])->name('tables.store');
Route::post('/tables/{table}/rotate', [AdminDiningTableController::class, 'rotate'])->name('tables.rotate');
Route::get('/tables/{table}/qr', [AdminDiningTableController::class, 'qr'])->name('tables.qr');
