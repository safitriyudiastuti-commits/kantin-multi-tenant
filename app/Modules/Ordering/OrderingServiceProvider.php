<?php

namespace App\Modules\Ordering;

use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

/**
 * Modul: Ordering.
 * Tanggung jawab: Keranjang (Redis), checkout atomik, order induk, snapshot (Modul 8-9). Pemilik route customer.
 *
 * Titik perakitan modul (modular monolith): binding container di register(),
 * route/event/policy di boot(). Batas antarmodul ditegakkan lewat kontrak & event,
 * bukan akses langsung tabel/controller modul lain.
 */
final class OrderingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Binding kontrak -> implementasi ditambahkan saat modul diimplementasikan.
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'ordering');

        RateLimiter::for(
            'qr-scan',
            fn (Request $request): Limit => Limit::perMinute(30)->by($request->ip() ?? 'unknown'),
        );
    }

    protected function moduleAlias(): string
    {
        return 'ordering';
    }
}
