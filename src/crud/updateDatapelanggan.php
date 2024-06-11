<?php
include "koneksi.php";
var_dump($_POST);
if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nama = htmlspecialchars($_POST["nama"]);
    $nohp = htmlspecialchars($_POST["nohp"]);
    $sql = "UPDATE user SET nama='$nama', notelp='$nohp' WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: ./../DataPelanggan.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
