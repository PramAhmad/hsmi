# Panduan Instalasi dan Menjalankan Project Laravel + Node.js (Untuk Contributor)

Panduan ini membantu kamu untuk menjalankan project Laravel dan Node.js dari awal, bahkan jika kamu belum pernah pakai terminal sebelumnya. Ikuti langkah demi langkah ya!

---

## 📦 Persiapan Awal

### 1. Install Software yang Dibutuhkan

Pastikan kamu sudah install software berikut di laptop kamu:

* **Git**: [https://git-scm.com/downloads](https://git-scm.com/downloads)
* **Composer**: [https://getcomposer.org/download/](https://getcomposer.org/download/)
* **Node.js + npm**: [https://nodejs.org/](https://nodejs.org/)
* **XAMPP (untuk PHP dan MySQL)**: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)

> **Catatan**: Jika kamu menggunakan Linux atau Mac, kamu bisa sesuaikan instruksi sesuai OS kamu. atau pake laragon dll pasti udah bisa buat install dan lain lain

### 2. Jalankan XAMPP

Buka XAMPP Control Panel dan nyalakan:

* Apache
* MySQL

---

## 📂 Clone Project dari GitHub

1. Buka **terminal** atau **Git Bash** (Windows).

2. Pindah ke folder tempat kamu ingin menyimpan project, contoh:

```bash
cd Documents
```
atau kalo misal di laragon ke comand nya saja


3. Clone project Laravel dari GitHub:

```bash
git clone https://github.com/PramAhmad/hsmi
```

4. Masuk ke folder project:

```bash
cd hsmi
```

---

## ⚙️ Install Dependency Laravel

### 1. Install Composer Dependency

```bash
composer install
```

### 2. Copy File `.env`

```bash
cp .env.example .env
```

### 3. Generate App Key

```bash
php artisan key:generate
```

### 4. Setting Database (di file `.env`)

Edit file `.env` dan sesuaikan bagian ini:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

> Buat database dengan nama `nama_database` di phpMyAdmin sebelum lanjut.

### 5. Jalankan Migrasi

```bash
php artisan migrate
```

---

## 🚀 Jalankan Laravel

```bash
php artisan serve
```

Akses project kamu di browser:

```
http://127.0.0.1:8000
```

---

## 🌐 Install & Jalankan Node.js (Vite/Frontend)

1. Install Dependency:

```bash
npm install
```

2. Jalankan Vite:

```bash
npm run dev
```

> Biarkan terminal ini tetap terbuka. Ini akan otomatis reload saat kamu mengubah file frontend.

---

## 🏁 Selesai!

Sekarang project kamu sudah bisa berjalan:

* Laravel backend: [http://127.0.0.1:8000](http://127.0.0.1:8000)
* Vite frontend: biasanya di-serve otomatis oleh Laravel jika terhubung

Jika ada error, coba periksa:

* Apakah XAMPP sudah jalan?
* Apakah database sudah dibuat?
* Apakah kamu menjalankan `php artisan serve` dan `npm run dev`?
* Kalo gak bisa Contact Ajah Admin

  
# 📘 Panduan Git: Nama Branch & Commit Message Sederhana (Untuk Contributor)

Dokumen ini menjelaskan cara menggunakan Git secara sederhana dalam project Laravel kamu. Fokus ke pemula yang baru belajar dan cukup pakai nama sendiri sebagai nama branch, jika sudah bisa lebih kompleks lebh baik

---

## 🌿 Penamaan Branch

### Gunakan Nama Sendiri

Untuk mempermudah, kamu cukup gunakan nama kamu sendiri sebagai nama branch.

### Contoh:

* `pram`
* `udin`
* `siti`

### Cara Buat Branch Baru:
##  Ditahap sebelumnya sudah clone project nah secara default itu ada di branch main, tugas selanjutnya adalah ubah branch kamu contoh pram pake comand dimana 


```bash
git checkout -b pram
```

---

## 💬 Format Commit Message

Gunakan format sederhana:

```
[#fitur] deskripsi singkat
```

Atau cukup:

```
Deskripsi singkat perubahan
```

### Contoh:

```
setup project laravel pertama
```

```
benerin tampilan halaman login
```

```
tambah fitur register user
```

> Yang penting: commit-nya jelas dan sesuai isi perubahan.

---

## 🛠 Contoh Alur Workflow

```bash
git checkout -b pram
# buat perubahan kode

git add .
git commit -m "setup project laravel pertama"
git push origin pram
```

---

Dengan cara ini, kamu bisa mulai berkontribusi ke project Laravel dengan mudah tanpa bingung aturan Git yang ribet. Yang penting: konsisten dan deskripsinya jelas ya! 🚀



Semangat belajar! 🚀
