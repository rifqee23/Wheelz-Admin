<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "koneksi.php";

$id = $_GET['id'];

// Nonaktifkan foreign key checks
mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0");

$sql = "DELETE FROM Vehicle WHERE id='$id'";
$result = mysqli_query($conn, $sql);

// Aktifkan kembali foreign key checks
mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1");

if ($result) {
    header("Location: ./../DataMobil.php");
    exit();
} else {
    echo "<script>alert('Gagal Menghapus data');</script>";
}
