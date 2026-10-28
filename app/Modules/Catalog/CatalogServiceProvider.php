<?php

namespace App\Modules\Catalog;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

/**
 * Modul: Catalog.
 * Tanggung jawab: Kategori, menu, modifier, stok tenant, dan public catalog (Modul 7).
 */
final class CatalogServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Binding kontrak -> implementasi ditambahkan saat modul diimplementasikan.
    }

    public function boot(): void
    {
        // Agar view bisa dipanggil dengan view('catalog::...')
        $this->loadViewsFrom(__DIR__.'/resources/views', 'catalog');
        $this->loadRoutesFrom(__DIR__.'/routes/tenant.php');

        // Agar komponen Livewire berawalan catalog:: dikenali
        Livewire::addNamespace(
            namespace: 'catalog',
            viewPath: __DIR__.'/resources/views/livewire'
        );
    }
}