# Quality Gate Pertemuan 06

## Hasil

| Pemeriksaan | Hasil | Catatan |
|---|---|---|
| Tes QR dan sesi pelanggan | Lulus | 5 passed, 22 assertions |
| Laravel Pint | Belum dijalankan | Jalankan `vendor\bin\pint --test` |
| Build frontend | Belum dijalankan | Jalankan `npm run build` jika diperlukan |

## Perintah tes

```powershell
php artisan test --compact tests\Feature\QrTableSessionTest.php