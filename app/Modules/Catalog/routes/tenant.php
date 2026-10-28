<?php

use App\Models\Tenant;
use App\Support\Routing\PortalRoutes;
use Illuminate\Support\Facades\Route;

PortalRoutes::tenant(function (): void {
    Route::get('/menu-manager', fn (Tenant $tenant) => view('catalog::tenant.menu-manager', ['tenant' => $tenant]))
        ->name('menu-manager');
});