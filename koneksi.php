<?php
// File koneksi database menggunakan mysqli procedural style
$host = "localhost";
$user = "root";
$password = "";
$database = "db_crud_mysqli";

$koneksi = mysqli_connect($host, $user, $password, $database);

// Menampilkan pesan error jika koneksi gagal
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
