# 🛠️ Sistem Pendukung Keputusan Balancing Rotating Equipment

## 📌 Deskripsi Proyek

Sistem ini dikembangkan untuk mendukung proses **balancing rotating equipment** di **PT PLN** dengan pendekatan **Metode Vektor Momen** dan **Analytical Hierarchy Process (AHP)**. Aplikasi berbasis web ini membantu tim operasional dalam mengambil keputusan secara objektif dan terstruktur berdasarkan data komponen, timbangan, dan hasil kalkulasi.

---

## 🚀 Tech Stack

- **Framework**: Laravel 10
- **Frontend**: Inertia.js + Tailwind CSS
- **Database**: MySQL
- **Middleware Auth & Role**: Laravel Breeze / Spatie (opsional)

---

## 👥 Role Pengguna

| Role         | Deskripsi Singkat                                                                 |
|--------------|------------------------------------------------------------------------------------|
| Operational  | Input dan validasi data timbangan serta melakukan kalkulasi sederhana              |
| Maintenance  | Pemantauan data komponen serta rekap laporan hasil balancing                       |
| Engineering  | Analisis hasil kalkulasi, visualisasi momen, dan pengambilan keputusan akhir       |

---

## 📂 Menu Utama Aplikasi

| Menu                    | Fitur                                                                 |
|-------------------------|-----------------------------------------------------------------------|
| 🛠️ Equipment            | Manajemen data mesin dan rotating equipment                            |
| ⚖️ Timbangan            | Input data hasil pengukuran (massa & posisi)                           |
| 🧩 Komponen Data        | Input data komponen seperti poros, beban, serta identifikasi titik     |
| 🧮 Kalkulasi             | - **Hasil Analisis Komponen** (Mx, My, Resultan)                      |
|                         | - **Informasi Tambahan** (sudut koreksi, beban tambahan)              |
|                         | - **Visualisasi** (grafik distribusi momen & vektor resultan)         |
| 📄 Laporan              | Rekap hasil balancing dan ekspor PDF                                  |
| 📘 Petunjuk Penggunaan  | Panduan interaktif untuk menggunakan aplikasi                         |
| 🔐 Logout               | Keluar dari aplikasi dengan aman                                      |

---

## 📦 Instalasi & Konfigurasi

```bash
# 1. Clone repositori
git clone https://github.com/username/project-balancing-pln.git
cd project-balancing-pln

# 2. Install dependensi backend
composer install

# 3. Install dependensi frontend
npm install && npm run build

# 4. Konfigurasi environment
cp .env.example .env
php artisan key:generate
# Atur DB_ di file .env untuk koneksi MySQL

# 5. Migrasi dan seeder
php artisan migrate --seed

# 6. Jalankan aplikasi
php artisan serve

© 2025 - BalancePro & Tim Pengembang.