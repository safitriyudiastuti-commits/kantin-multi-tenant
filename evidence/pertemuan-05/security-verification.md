# Verifikasi Keamanan — Pertemuan 05

- Admin tanpa peran kantin (canteen manager) → mendapat 403 saat akses /admin/tenants (diuji di AdminManagementTest)
- Nomor rekening tenant tidak ditampilkan mentah di UI, hanya 4 digit terakhir (account_last4)
- Audit log tidak menyimpan nomor rekening penuh