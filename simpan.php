<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = trim($_POST['nama']);
    $nim = trim($_POST['nim']);
    $jurusan = trim($_POST['jurusan']);
    $email = trim($_POST['email']);

    if ($nama == '' || $nim == '' || $jurusan == '' || $email == '') {
        die("Semua field wajib diisi.");
    }

    // Prepared statement untuk mencegah SQL Injection
    $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $query);

    if (!$stmt) {
        die("Prepared statement gagal: " . mysqli_error($koneksi));
    }

    mysqli_stmt_bind_param($stmt, "ssss", $nama, $nim, $jurusan, $email);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php?status=sukses_tambah");
        exit;
    } else {
        die("Query insert gagal: " . mysqli_stmt_error($stmt));
    }
} else {
    header("Location: tambah.php");
    exit;
}
?>
