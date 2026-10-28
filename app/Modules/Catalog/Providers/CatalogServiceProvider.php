<?php

namespace App\Modules\Catalog\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class CatalogServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Daftarkan view agar bisa dipanggil view('catalog::...')
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'catalog');

        // Daftarkan namespace Livewire agar make:livewire catalog::... bisa jalan
        Livewire::addNamespace(
            namespace: 'catalog',
            viewPath: __DIR__.'/../resources/views/livewire'
        );
    }
}