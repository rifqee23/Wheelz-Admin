<?php

include("koneksi.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    $id = $_POST["id_mobil"];
    $model = $_POST['model'];
    $nopol = $_POST['nopol'];
    $mobil = $_POST['mobil'];
    $seat = $_POST['seat'];
    $only = $_POST['only'];
    $driver = $_POST['driver'];
    $fuel = $_POST['fuel'];

    $folder = "/opt/lampp/htdocs/wheelz admin/src/asset/carImg/";
    $folder1 = "/opt/lampp/htdocs/adsi/src/mobil/";

    // Initialize file upload status
    $status = 1;

    // Check if a file is uploaded
    if ($_FILES["gambar"]["error"] == UPLOAD_ERR_NO_FILE) {
        // No file uploaded, fetch existing image from the database
        $query = "SELECT gambar FROM Vehicle WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        if ($row = mysqli_fetch_assoc($result)) {
            $nama_file_asli = $row['gambar'];
        } else {
            echo "Error fetching existing image.";
            $status = 0;
        }
    } else {
        // File uploaded, process the upload
        $nama_file_asli = basename($_FILES["gambar"]["name"]);
        $file_extension = strtolower(pathinfo($nama_file_asli, PATHINFO_EXTENSION));
        $nama_file_tanpa_ekstensi = pathinfo($nama_file_asli, PATHINFO_FILENAME);
        $file_in_folder = $folder . $nama_file_asli;
        $file_in_folder1 = $folder1 . $nama_file_asli;

        // Check if the file is an image
        $cek = getimagesize($_FILES["gambar"]["tmp_name"]);
        if ($cek !== false) {
            // Check file extension
            if ($file_extension !== "jpg" && $file_extension !== "png" && $file_extension !== "jpeg" && $file_extension !== "gif") {
                echo "Format file tidak didukung";
                $status = 0;
            }

            // Ensure unique file name
            $counter = 1;
            while (file_exists($file_in_folder)) {
                $nama_file_asli = $nama_file_tanpa_ekstensi . "(" . $counter . ")." . $file_extension;
                $file_in_folder = $folder . $nama_file_asli;
                $counter++;
            }

            // Upload file
            if ($status && move_uploaded_file($_FILES["gambar"]["tmp_name"], $file_in_folder)) {
                if (!copy($file_in_folder, $file_in_folder1)) {
                    echo "Gagal menyalin file ke folder kedua.";
                    $status = 0;
                }
            } else {
                echo "Upload gambar gagal!";
                $status = 0;
            }
        } else {
            echo "File yang diunggah bukan gambar!";
            $status = 0;
        }
    }

    // If everything is okay, update the database
    if ($status) {
        $sql = "UPDATE Vehicle SET model='$model', nama_mobil='$mobil', seat='$seat', car_only='$only', car_only_driver='$driver', car_only_driver_fuel='$fuel', gambar='$nama_file_asli' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            header("Location: ./../DataMobil.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
