
### `evidence/pertemuan-06/demo-script.md`

```md
# Demo Meja dan QR

## Persiapan
1. Jalankan aplikasi.
2. Masuk sebagai `admin@kantin.test`.
3. Buka `/admin/tables`.

## Demo admin
1. Tambahkan meja jika belum ada.
2. Klik **Terbitkan QR**.
3. Tunjukkan QR dan, bila tersedia, tombol unduh serta cetak.
4. Kembali ke daftar meja dan pastikan status QR berubah menjadi aktif.
5. Klik **Rotate QR** untuk menerbitkan QR baru.

## Demo pemindaian
1. Buka URL QR baru di browser atau pindai QR.
2. Pastikan pelanggan diarahkan ke halaman kantin yang sesuai.
3. Buka URL QR lama setelah rotasi.
4. Pastikan token lama ditolak.

## Hasil aktual
Isi setelah demo: apa yang berhasil, apa yang gagal, dan pesan yang muncul.

## Catatan
Jika memindai dari ponsel, URL `127.0.0.1` tidak menunjuk ke komputer server. Gunakan alamat jaringan komputer yang dapat dijangkau ponsel.