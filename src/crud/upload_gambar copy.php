<?php

include("koneksi.php");

if (isset($_POST['submit'])) {
    $model = $_POST['model'];
    $nopol = $_POST['nopol'];
    $mobil = $_POST['mobil'];
    $seat = $_POST['seat'];
    $only = $_POST['only'];
    $driver = $_POST['driver'];
    $fuel = $_POST['fuel'];


    // upload

    $folder = "/opt/lampp/htdocs/wheelz admin/src/asset/carImg/";
    $folder1 = "/opt/lampp/htdocs/adsi/src/mobil/";

    // Mendapatkan nama file asli
    $nama_file_asli = basename($_FILES["gambar"]["name"]);

    // Menyusun path lengkap untuk file di folder pertama dan kedua
    $file_in_folder = $folder . $nama_file_asli;
    $file_in_folder1 = $folder1 . $nama_file_asli;

    // Status awal
    $status = 1;

    // Mendapatkan ekstensi file
    $file_extension = strtolower(pathinfo($nama_file_asli, PATHINFO_EXTENSION));

    // Memeriksa apakah tombol submit ditekan
    if (isset($_POST["submit"])) {
        // Memeriksa apakah file adalah gambar
        $cek = getimagesize($_FILES["gambar"]["tmp_name"]);
        if ($cek !== false) {
            echo "File adalah gambar - " . $cek["mime"] . ".";
            $status = 1;
        } else {
            echo "File yang diunggah bukan gambar!";
            $status = 0;
        }
    }

    // Memeriksa apakah file sudah ada
    if (file_exists($file_in_folder) || file_exists($file_in_folder1)) {
        echo "File yang Anda unggah sudah ada!";
        $status = 0;
    }

    // Memeriksa ekstensi file
    if ($file_extension !== "jpg" && $file_extension !== "png" && $file_extension !== "jpeg" && $file_extension !== "gif") {
        echo "Format file tidak didukung";
        $status = 0;
    }

    // Menyimpan atau menampilkan pesan jika upload berhasil atau gagal
    if ($status == 0) {
        echo "Upload gambar gagal!";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $file_in_folder)) {
            // Mengunggah file ke folder pertama
            echo "File " . htmlspecialchars($nama_file_asli) . " berhasil diunggah ke folder pertama.";

            // Menyalin file ke folder kedua
            if (copy($file_in_folder, $file_in_folder1)) {
                echo "File berhasil disalin ke folder kedua.";
            } else {
                echo "Gagal menyalin file ke folder kedua.";
            }

            $sql = "SELECT * FROM Vehicle WHERE nomor_polisi='$nopol'";
            $result = mysqli_query($conn, $sql);

            if (!mysqli_num_rows($result) > 0) {

                $sql = "INSERT INTO Vehicle (model, nomor_polisi, nama_mobil, seat, car_only, car_only_driver, car_only_driver_fuel, gambar) VALUES ('$model', '$nopol', '$mobil', '$seat', '$only', '$driver', '$fuel', $nama_file_asli)";

                if (mysqli_query($conn, $sql)) {
                    echo "New record Successfully";
                } else {
                    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "Nomor plat sudah ada";
            }
        } else {
            echo "Upload gambar gagal!";
        }
    }

    // upload end




}
