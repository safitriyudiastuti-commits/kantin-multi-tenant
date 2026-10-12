# Verifikasi Keamanan QR dan Sesi

## Pemeriksaan yang dituju

| Pemeriksaan | Hasil |
|---|---|
| Token QR acak, bukan ID meja | Belum diverifikasi |
| Database menyimpan hash token, bukan token mentah | Belum diverifikasi |
| Rotasi mencabut token lama | Belum diverifikasi |
| Token tidak valid menghasilkan 404 generik | Belum diverifikasi |
| Cookie `customer_session` memakai HttpOnly | Belum diverifikasi ulang |
| Cookie memakai SameSite=Lax | Belum diverifikasi ulang |
| Sesi terikat pada kantin dan meja hasil scan | Belum diverifikasi |

## Cara memverifikasi
Jalankan:

```powershell
php artisan test --compact tests\Feature\QrTableSessionTest.php