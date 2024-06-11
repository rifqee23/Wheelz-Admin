<?php
include "koneksi.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sql = "UPDATE pembayaran SET Status='$status' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: ./../pembayaranrefund.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request method.";
}
