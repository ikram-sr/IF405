# Aplikasi Mini CRUD Mahasiswa Menggunakan mysqli

Aplikasi ini dibuat untuk memenuhi tugas mata kuliah Pemrograman Web II. Aplikasi menggunakan PHP, MySQL, dan mysqli procedural style.

## Fitur

- Menampilkan data mahasiswa
- Menambahkan data mahasiswa
- Mengedit data mahasiswa
- Menghapus data mahasiswa
- Error handling untuk koneksi dan query
- Prepared statement pada proses tambah, edit, update, dan hapus data

## Cara Menjalankan

1. Ekstrak folder `crud-mysqli-mahasiswa` ke dalam folder `htdocs` XAMPP.
2. Jalankan Apache dan MySQL melalui XAMPP Control Panel.
3. Buka phpMyAdmin.
4. Import file `database.sql`.
5. Akses aplikasi melalui browser:

```text
http://localhost/crud-mysqli-mahasiswa/
```

## Konfigurasi Database

Konfigurasi database terdapat pada file `koneksi.php`:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_crud_mysqli";
```
