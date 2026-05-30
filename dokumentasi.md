# Dokumentasi Singkat Aplikasi Mini CRUD mysqli

## 1. Penjelasan Style mysqli yang Digunakan

Aplikasi ini menggunakan **mysqli procedural style**. Procedural style dipilih karena penulisannya sederhana, mudah dipahami, dan sesuai untuk aplikasi mini CRUD. Koneksi database dibuat menggunakan fungsi `mysqli_connect()`, sedangkan proses query menggunakan fungsi seperti `mysqli_query()`, `mysqli_prepare()`, `mysqli_stmt_bind_param()`, dan `mysqli_stmt_execute()`.

Prepared statement digunakan pada proses tambah, ambil data edit, update, dan hapus data. Tujuannya adalah untuk meningkatkan keamanan aplikasi dari risiko SQL Injection, karena input dari pengguna tidak langsung digabungkan ke dalam query SQL.

## 2. Struktur Database

Nama database yang digunakan adalah:

```sql
db_crud_mysqli
```

Tabel utama yang digunakan adalah tabel `mahasiswa` dengan struktur sebagai berikut:

| Field | Tipe Data | Keterangan |
|---|---|---|
| id | INT AUTO_INCREMENT | Primary key |
| nama | VARCHAR(100) | Nama mahasiswa |
| nim | VARCHAR(20) | Nomor Induk Mahasiswa |
| jurusan | VARCHAR(100) | Jurusan mahasiswa |
| email | VARCHAR(100) | Email mahasiswa |
| created_at | TIMESTAMP | Waktu data dibuat |

Query pembuatan tabel:

```sql
CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL UNIQUE,
    jurusan VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## 3. Alur Kerja Aplikasi

Alur kerja aplikasi dimulai dari halaman `index.php`, yaitu halaman utama yang menampilkan seluruh data mahasiswa dari database. Pada halaman ini pengguna dapat memilih aksi tambah, edit, atau hapus data.

Saat pengguna menambahkan data, halaman `tambah.php` menampilkan form input. Data yang dikirim diproses oleh `simpan.php` menggunakan prepared statement, lalu disimpan ke database.

Saat pengguna mengedit data, halaman `edit.php` mengambil data berdasarkan ID menggunakan prepared statement. Setelah data diperbarui, file `update.php` menjalankan query update ke database.

Saat pengguna menghapus data, file `hapus.php` menerima ID data yang dipilih, kemudian menjalankan query delete menggunakan prepared statement. Setelah proses selesai, pengguna diarahkan kembali ke halaman utama.

Jika koneksi database atau query gagal, aplikasi akan menampilkan pesan error sehingga kesalahan dapat diketahui dan diperbaiki.
