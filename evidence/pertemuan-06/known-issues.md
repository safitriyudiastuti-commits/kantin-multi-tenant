# Kendala yang Diketahui

- Halaman QR saat ini sudah menampilkan gambar, tetapi tombol **Unduh QR (SVG)** dan **Cetak** perlu diperiksa agar sesuai Tahap 8.
- Daftar meja perlu diperiksa untuk ringkasan jumlah meja, status aktif/nonaktif, dan aksi aktivasi.
- URL `127.0.0.1` hanya menunjuk ke perangkat yang membukanya. Pemindaian dari ponsel memerlukan alamat komputer yang bisa dijangkau ponsel.
- Tes `QrTableSessionTest` sebelumnya gagal karena route memakai controller lama. Setelah route diarahkan ke controller Ordering, tes perlu dijalankan ulang dan hasil terbaru dicatat di `quality-gate.md`.

## Pembaruan
Tambahkan tanggal, kendala yang ditemukan, dan cara mengatasinya setelah setiap percobaan.