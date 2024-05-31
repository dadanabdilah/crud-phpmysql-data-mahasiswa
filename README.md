# Crud Sederhana Data Mahasiswa

Crud Datda Mahasiswa adalah aplikasi berbasis web yang digunakan untuk mengelola data mahasiswa. Aplikasi ini dibangun menggunakan PHP dan AdminLTE 3 sebagai template antarmuka. Berikut ini adalah fitur-fitur yang telah dibuat:

## Fitur

### 1. Beranda
- **URL**: `index.php`

### 2. Kelola Data Mahasiswa
- **URL**: `index.php?page=data-mahasiswa`

  #### Subfitur
  - **Tambah Mahasiswa**
    - **URL**: `index.php?page=tambah-mahasiswa`
    - **Deskripsi**: Formulir untuk menambah data mahasiswa baru.
  
  - **Ubah Mahasiswa**
    - **URL**: `index.php?page=ubah-mahasiswa&id={id-mahasiswa}`
    - **Deskripsi**: Formulir untuk mengubah data mahasiswa yang sudah ada.
  
  - **Hapus Mahasiswa**
    - **URL**: `pages/mahasiswa/hapus-mahasiswa.php?id={id-mahasiswa}`
    - **Deskripsi**: Opsi untuk menghapus data mahasiswa yang sudah ada.


## Cara Menggunakan

1. **Mengakses Halaman Beranda**:
   - Setelah login, pengguna akan diarahkan ke halaman beranda di `index.php`.

2. **Mengelola Data Mahasiswa**:
   - Pilih menu "Kelola Data" di sidebar untuk melihat daftar mahasiswa.
   - Gunakan tombol "Tambah" untuk menambah mahasiswa baru.
   - Klik ikon edit untuk mengubah data mahasiswa.
   - Klik ikon hapus untuk menghapus data mahasiswa.

## Teknologi yang Digunakan

- **Frontend**: AdminLTE 3
- **Backend**: PHP dan MySQL

## Kontribusi

Kontribusi dalam bentuk isu (issue) dan permintaan tarik (pull request) sangat dihargai. Untuk masalah dan permintaan fitur, silakan buka isu di repositori ini.

## Lisensi

Proyek ini dilisensikan di bawah lisensi MIT. Lihat berkas `LICENSE` untuk informasi lebih lanjut.
