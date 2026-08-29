# Kantin Multi-Tenant

## Requirements
- Laravel 13.x 
- PHP 8.4.x
- Livewire v4.x

## Setup
- php -v 
- composer --version
- node -v
- npm -v
- git --version

- composer install
- npm install

- php artisan key:generate
- php artisan migrate:fresh --seed
- php artisan install:broadcasting -> pilih laravel reverb

## Run
Menjalankan seluruh environment development (laravel server, vite, queue worker dan reverb):
composer run dev

Reverb tidak perlu dijalankan kembali dengan php artisan reverb:start apabila sudah dijalankan oleh composer run dev.

## Test
- php artisan test
- vendor\bin\pint --test
- npm run build

## Troubleshooting
- jika muncul error filemtime(): stat failed saat menjalankan php artisan test, bersihkan cache laravel dengan php artisan optimize:clear, lalu jalankan kembali

- Jika npm run dev menghasilkan error Could not read package.json, masuk ke folder project Laravel terlebih dahulu sebelum menjalankan perintah npm

- redis-cli tidak dapat dijalankan, saat menjalankan redis-cli -p 6379 ping, muncul pesan The system cannot find the path specified. Redis pada ServBay berstatus running dengan port 6379, namun perintah tersebut belum berhasil menghasilkan PONG