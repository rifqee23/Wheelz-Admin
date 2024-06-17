<?php
include "./../koneksi.php";
session_start();

if (isset($_SESSION['user'])) {
    header("Location: ../../index.php");
    exit();
}


if (isset($_POST["submit"])) {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row;

        header("Location: ../../index.php");
        exit();
    } else {
        echo "<script>alert('Password Salah');</script>";
    }
}
