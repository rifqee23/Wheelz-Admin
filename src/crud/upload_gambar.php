<?php

include("koneksi.php");

if(isset($_POST['submit'])) {
  $model = $_POST['model'];
  $nopol = $_POST['nopol'];
  $mobil = $_POST['mobil'];
  $seat = $_POST['seat'];
  $only = $_POST['only'];
  $driver = $_POST['driver'];
  $fuel = $_POST['fuel'];

  // upload
  $folder = "/var/www/html/wheelz admin/src/asset/carImg/";
  $folder1 = "/var/www/html/adsi/src/mobil/";

  // Mendapatkan nama file asli
  $nama_file_asli = basename($_FILES["gambar"]["name"]);

  // Menyusun path lengkap untuk file di folder pertama dan kedua
  $file_in_folder = $folder . $nama_file_asli;
  $file_in_folder1 = $folder1 . $nama_file_asli;

  // Status awal
  $status = 1;

  // Mendapatkan ekstensi file
  $file_extension = strtolower(pathinfo($nama_file_asli, PATHINFO_EXTENSION));

  //error
  $error = $_FILES["gambar"]["error"];



  if ($error === 4) {
    header("Location: ./../DataMobil.php?alert=belum_upload");
    $status = 0;
}

  // Memeriksa apakah file adalah gambar
  $cek = getimagesize($_FILES["gambar"]["tmp_name"]);
  if ($cek !== false) {
      $status = 1;
  } else {
    header("Location: ./../DataMobil.php?alert=bukan_gambar");
      $status = 0;
  }

  // Memeriksa apakah file sudah ada
  if (file_exists($file_in_folder) || file_exists($file_in_folder1)) {
    header("Location: ./../DataMobil.php?alert=file_exist");
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
          header("Location: ./../DataMobil.php");
      
        //   Menyalin file ke folder kedua
          if (copy($file_in_folder, $file_in_folder1)) {
            header("Location: ./../DataMobil.php");
          } else {
            header("Location: ./../DataMobil.php?alert=gagal_salin");
          }

      } else {
        header("Location: ./../DataMobil.php?alert=failed");
      }
  }
  // upload end



  $sql = "SELECT * FROM Vehicle WHERE nomor_polisi='$nopol'";
  $result = mysqli_query($conn, $sql);

  // Jika nomor polisi belum ada di database, lakukan penambahan data baru
  if (!mysqli_num_rows($result) > 0) {
      // Query untuk menambahkan data baru
      $sql = "INSERT INTO Vehicle (model, nomor_polisi, nama_mobil, seat, car_only, car_only_driver, car_only_driver_fuel, gambar) VALUES ('$model', '$nopol', '$mobil', '$seat', '$only', '$driver', '$fuel', '$nama_file_asli')";

      // Jalankan query untuk menambahkan data baru
      if (mysqli_query($conn, $sql)) {
          echo "New record successfully created.";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
  } else {
      // Jika nomor polisi sudah ada di database, berikan pesan error
      echo "Nomor plat sudah ada.";
  }
}

?>
