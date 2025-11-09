# Aplikasi Hitung Biaya Parkir Mall

## Deskripsi
Aplikasi ini adalah program berbasis **PHP** yang digunakan untuk menghitung biaya parkir kendaraan di Mall.  
Tampilan aplikasi menggunakan **Bootstrap CSS** agar lebih rapi, dan mendukung input data melalui form.  

Fitur utama:
- Input data kendaraan (plat nomor, jenis kendaraan, jam masuk, jam keluar, dan keanggotaan).
- Perhitungan otomatis biaya parkir berdasarkan jenis kendaraan dan durasi parkir.
- Diskon khusus untuk anggota **Member** sebesar 10%.
- Penyimpanan hasil perhitungan ke dalam file **JSON** (`data.json`).

---

## Struktur Folder

---

## Aturan Perhitungan
1. **Mobil**
   - 1 jam pertama: Rp 5.000
   - Jam berikutnya: Rp 3.000 / jam  

2. **Motor**
   - 1 jam pertama: Rp 2.000
   - Jam berikutnya: Rp 1.000 / jam  

3. **Truk**
   - Rp 6.000 per jam  

4. **Diskon Member**
   - Diskon 10% dari total biaya parkir awal.  

---

## Cara Menjalankan
1. Pastikan sudah menginstall **XAMPP / LAMP / WAMP** (web server dengan PHP).
2. Simpan folder project ini ke dalam direktori:
   - Windows: `C:\xampp\htdocs\project-parkir-mall`
   - Linux/Mac: `/var/www/html/project-parkir-mall`
3. Jalankan **Apache** pada XAMPP.
4. Akses aplikasi melalui browser:


---

## Contoh Penggunaan
1. Masukkan **Plat Nomor Kendaraan**.
2. Pilih **Jenis Kendaraan** (Mobil, Motor, Truk).
3. Pilih **Jam Masuk** dan **Jam Keluar**.
4. Pilih **Keanggotaan** (Member / Non-Member).
5. Klik tombol **Hitung**.
6. Aplikasi akan menampilkan detail perhitungan, termasuk biaya awal, diskon (jika Member), dan biaya akhir.  

Hasil perhitungan juga akan disimpan dalam file `data.json`.

---

## Teknologi yang Digunakan
- **PHP** (untuk perhitungan dan logika aplikasi)
- **Bootstrap CSS** (untuk styling tampilan form)
- **JSON** (untuk menyimpan data hasil perhitungan)

---

## Output Contoh

---

## Lisensi
Proyek ini dibuat untuk tujuan pembelajaran. Silakan gunakan, ubah, dan kembangkan sesuai kebutuhan.
