# ADR 0008: Isolasi Multi-Tenant

## Status
Diterima

## Konteks
Aplikasi kantin ini shared database — satu database dipakai banyak kantin (tenant).
Perlu aturan jelas: data mana yang wajib difilter per tenant, gimana sistem tahu
tenant aktif, dan jalur mana yang boleh lihat data lintas tenant.

## 1. Tabel/Model yang wajib difilter per tenant
- Menu
- Category
- Modifier
- TenantOrder
- OrderItem
- Withdrawal

## 2. Cara menentukan tenant aktif
Tenant aktif ditentukan dari **parameter route**, contoh: `/tenant/{slug}/menu`
(sesuaikan kalau kamu makenya dari subdomain atau pilihan user).

## 3. Jalur yang boleh melewati filter tenant (bypass)
| Jalur | Alasan bypass | Filter pengganti |
|---|---|---|
| Katalog publik | Nampilin menu dari banyak kantin buat pelanggan | Filter by `canteen_id` hasil scan QR + `status = aktif` |
| Laporan admin platform | Admin platform perlu lihat data semua kantin | Wajib login sebagai admin platform |