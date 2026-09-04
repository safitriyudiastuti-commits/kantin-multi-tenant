# Data Dictionary - Kantin Multi-Tenant

Keterangan:
- tenant-owned = tabel ini punya 1 tenant tertentu → WAJIB ada kolom tenant_id
- platform-scoped = tabel ini dipakai bareng semua tenant → TIDAK perlu tenant_id

Domain-nya ada 8 rak:
- Identitas/akses (siapa aja usernya, siapa kantinnya)
- Meja/session (meja mana lagi dipakai siapa)
- Katalog (menu apa aja yang dijual)
- Order (transaksi pesanan)
- Payment (pembayaran)
- Ledger (catatan uang masuk-keluar)
- Outbox (antrian notifikasi/pesan)
- Audit (log siapa ngapain kapan)

## 1. Identitas/Akses
- canteens → platform-scoped
- tenants → tenant-owned
- users → platform-scoped
- balances → tenant-owned
- pivot role user → tenant-owned
- rekening bank → tenant-owned

## 2. Meja/Session
- meja (tables) → tenant-owned
- token meja → tenant-owned
- session meja → tenant-owned
- jam operasional → tenant-owned

## 3. Katalog
- kategori → tenant-owned
- menus → tenant-owned
- modifier group → tenant-owned
- modifier option → tenant-owned
- stok → tenant-owned
- komisi → tenant-owned

## 4. Order
- orders (INDUK) → platform-scoped (khusus, karena 1 checkout bisa lintas tenant)
- tenant_orders → tenant-owned
- order_items → tenant-owned
- order_item_modifiers → tenant-owned

## 5. Payment
- payment → tenant-owned
- payment_attempts → tenant-owned
- payment_events → tenant-owned, append-only
- withdrawal → tenant-owned

## 6. Ledger
- ledger → tenant-owned, append-only

## 7. Outbox/Notifikasi
- outbox → platform-scoped, append-only
- notification_deliveries → platform-scoped, append-only

## 8. Audit
- audit_logs → platform-scoped, append-only

## Composite Unique (buat foreign key komposit)
- tenants: (canteen_id, code), (canteen_id, slug), (id, canteen_id)
- menus: (tenant_id, id)

## Update — Struktur final mengikuti project dosen

Beberapa nama tabel/kolom berbeda dari draft awal:
- balances → tenant_balances (PK: tenant_id)
- bank_accounts → tenant_bank_accounts
- tenant_user (pivot) → user_canteen_roles + user_tenant_roles (dipisah 2 tabel)
- categories → menu_categories (MenuCategory)
- modifier_options.modifier_group_id → group_id
- commissions → commission_schemes (CommissionScheme)
- Tambahan: async_audit_tables (outbox, notifikasi, audit terpisah dari payment)
- Tambahan: admin_guards (di luar cakupan modul dasar)

## Reset Database (Development)

⚠️ PERINGATAN: Perintah ini menghapus SELURUH tabel dan data.
Hanya jalankan di environment development/testing.

php artisan migrate:fresh --seed