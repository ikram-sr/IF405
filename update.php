<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['id']);
    $nama = trim($_POST['nama']);
    $nim = trim($_POST['nim']);
    $jurusan = trim($_POST['jurusan']);
    $email = trim($_POST['email']);

    if ($id <= 0 || $nama == '' || $nim == '' || $jurusan == '' || $email == '') {
        die("Data tidak valid atau masih ada field kosong.");
    }

    // Prepared statement untuk update data
    $query = "UPDATE mahasiswa SET nama = ?, nim = ?, jurusan = ?, email = ? WHERE id = ?";
    $stmt = mysqli_prepare($koneksi, $query);

    if (!$stmt) {
        die("Prepared statement gagal: " . mysqli_error($koneksi));
    }

    mysqli_stmt_bind_param($stmt, "ssssi", $nama, $nim, $jurusan, $email, $id);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php?status=sukses_update");
        exit;
    } else {
        die("Query update gagal: " . mysqli_stmt_error($stmt));
    }
} else {
    header("Location: index.php");
    exit;
}
?>
