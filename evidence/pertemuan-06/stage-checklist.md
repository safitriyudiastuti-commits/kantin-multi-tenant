# Checklist Tahap Pertemuan 06

## Meja dan token QR
- [ ] Admin dapat melihat daftar meja.
- [ ] Admin dapat menambahkan meja dan zona.
- [ ] Kode meja unik dalam satu kantin.
- [ ] Admin dapat menerbitkan QR.
- [ ] Rotasi menerbitkan token baru dan mencabut token lama.
- [ ] Token mentah hanya ditampilkan saat penerbitan.

## Sesi pelanggan
- [ ] Token QR valid membuat sesi pelanggan anonim.
- [ ] Sesi terikat pada kantin dan meja yang benar.
- [ ] Cookie sesi memakai HttpOnly dan SameSite=Lax.
- [ ] Token tidak valid atau dicabut ditolak dengan 404.

## QR siap cetak — Tahap 8
- [ ] Gambar QR tampil.
- [ ] QR dapat diunduh sebagai SVG.
- [ ] QR dapat dicetak.
- [ ] URL QR mengarah ke alamat yang dapat dijangkau perangkat pemindai.

## Bukti
- [ ] Hasil tes disimpan di `evidence/pertemuan-06/test-results/`.
- [ ] Tangkapan layar daftar meja dan halaman QR disimpan.
- [ ] Catatan kendala diisi di `known-issues.md`.