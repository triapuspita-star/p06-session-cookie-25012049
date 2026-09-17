# p06-session-cookie-25012049

Nama: Tria Puspita | NIM: 25012049 | Kelas: 25M11

## Cara Menjalankan

1. Buka PowerShell di folder pertemuan-06
2. php -S localhost:8080
3. Buka browser: http://localhost:8080/

## Fitur yang Diimplementasikan

* Praktik B Session: keranjang belanja add/remove/clear, flash message
* Praktik C Cookie: preferensi tema light/dark disimpan 30 hari, last\_product
* Keamanan: htmlspecialchars e(), validasi tema, POST untuk aksi

## Tabel Pengujian

| No | Skenario | Langkah | Hasil |
| 1 | Lihat produk | Buka index.php | Daftar Kopi Susu dll muncul, cart 0 |
| 2 | Tambah ke keranjang | Klik Tambah | Cart +1, flash "ditambahkan" |
| 3 | Ganti tema | Klik Dark | Background jadi dark, cookie theme=dark |
| 4 | Refresh tema | Refresh browser | Tema tetap dark (dari cookie) |
| 5 | Hapus item | Klik Hapus di cart | Item hilang |
| 6 | Kosongkan cart | Klik Kosongkan | Cart jadi 0 |

## Bukti Screenshot

* Screenshot Commit: ada di file laporan.docx bagian Area screenshot tab Commits (10 commit)
* Screenshot Aplikasi: ada di file laporan.docx bagian Area screenshot aplikasi
* Link Repo: https://github.com/triapuspita-star/p06-session-cookie-25012049

## Kendala dan Solusi

* Cookie tidak langsung ganti: pakai redirect header Location
* Struktur folder dobel components/components: pindahkan file dengan move

