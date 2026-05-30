<?php
include 'koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = intval($_GET['id']);

if ($id <= 0) {
    die("ID tidak valid.");
}

// Prepared statement untuk menghapus data
$query = "DELETE FROM mahasiswa WHERE id = ?";
$stmt = mysqli_prepare($koneksi, $query);

if (!$stmt) {
    die("Prepared statement gagal: " . mysqli_error($koneksi));
}

mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    header("Location: index.php?status=sukses_hapus");
    exit;
} else {
    die("Query delete gagal: " . mysqli_stmt_error($stmt));
}
?>
