# 🅿️ Aplikasi Hitung Biaya Parkir Mall (PHP & Bootstrap)
[![GitHub top language](https://img.shields.io/github/languages/top/Nurvania-s/**parkir-mall**)](https://github.com/Nurvania-s/parkir-mall)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Status: Functional](https://img.shields.io/badge/Status-Functional-brightgreen)]()

## 📝 Deskripsi Proyek
Aplikasi ini adalah program berbasis **PHP** yang dirancang untuk **menghitung biaya parkir** kendaraan secara otomatis di sebuah lingkungan Mall. Proyek ini mendemonstrasikan kemampuan dalam logika perhitungan kompleks, penanganan *form input* data melalui web, dan penggunaan **JSON** untuk penyimpanan data hasil perhitungan.

## 🎯 Fitur Utama
* **Input Data Kendaraan:** Menerima input data seperti plat nomor, jenis kendaraan, jam masuk, jam keluar, dan status keanggotaan (Member/Non-Member).
* **Perhitungan Otomatis:** Menghitung total biaya parkir berdasarkan durasi parkir dan jenis kendaraan.
* **Diskon Member:** Menerapkan diskon **10%** dari total biaya parkir awal khusus untuk anggota Member.
* **Penyimpanan Data:** Hasil perhitungan disimpan dalam file **JSON** (`data.json`) untuk pencatatan transaksi sederhana.

## 🔑 Aturan Perhitungan Biaya
| Jenis Kendaraan | Tarif 1 Jam Pertama | Tarif Jam Berikutnya |
| :--- | :--- | :--- |
| **Mobil** | Rp 5.000 | Rp 3.000 / jam |
| **Motor** | Rp 2.000 | Rp 1.000 / jam |
| **Truk** | Rp 6.000 / jam (Tarif flat) | Rp 6.000 / jam |
| **Diskon Member** | 10% dari total biaya parkir awal | |

## ⚙️ Teknologi yang Digunakan
* **PHP:** Digunakan sebagai *back-end* untuk logika perhitungan, validasi data, dan operasi *file* (JSON).
* **Bootstrap CSS:** Digunakan untuk *styling* tampilan *form* agar lebih rapi dan responsif.
* **JSON:** Digunakan untuk menyimpan data hasil perhitungan.

## 🚀 Cara Menjalankan Aplikasi
1.  **Web Server:** Pastikan Anda sudah menginstal dan menjalankan **XAMPP / LAMP / WAMP** (web server yang dilengkapi PHP).
2.  **Penempatan Folder:** Simpan folder project ini ke dalam direktori *root* web server Anda:
    * Windows: `C:\xampp\htdocs\parkir-mall-php`
    * Linux/Mac: `/var/www/html/parkir-mall-php`
3.  **Akses Browser:** Jalankan **Apache** pada XAMPP, lalu akses aplikasi melalui browser:
    ```
    http://localhost/parkir-mall-php/
    ```

## 🖼️ Contoh Penggunaan
1.  Masukkan data kendaraan (Plat Nomor, Jenis Kendaraan).
2.  Pilih **Jam Masuk** dan **Jam Keluar**.
3.  Pilih **Keanggotaan** (Member / Non-Member).
4.  Klik tombol **Hitung**.
5.  Aplikasi akan menampilkan detail perhitungan (biaya awal, diskon, dan biaya akhir).

---
## Lisensi
Proyek ini dibuat untuk tujuan pembelajaran. Silakan gunakan, ubah, dan kembangkan sesuai kebutuhan.
