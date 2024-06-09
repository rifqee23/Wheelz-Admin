<?php

include("./crud/koneksi.php");

$num_per_page = 9;
$rs = mysqli_query($conn, "SELECT * FROM Vehicle");
$jumlah_data = mysqli_num_rows($rs);

$sql = "SELECT * FROM Vehicle LIMIT 0, $num_per_page";
$result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chat</title>
  <link rel="stylesheet" href="output.css" />
  <style>
    .whatsapp-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 80vh;
      width: 60vw;
      max-width: 600px;
      background-color: #f3f4f6;
      border-radius: 20px;
      padding: 20px;
      margin: auto;
    }

    .whatsapp-button {
      display: inline-flex;
      align-items: center;
      padding: 10px 20px;
      color: #000;
      background-color: #e0e7ff;
      border-radius: 8px;
      font-weight: 500;
      text-decoration: none;
      margin-top: 20px;
    }

    .whatsapp-button:hover {
      background-color: #c7d2fe;
    }

    .whatsapp-button i {
      margin-right: 10px;
    }
  </style>
</head>

<body class="bg-root dark:bg-slate-600">
  <header class="fixed w-full px-4 py-4 bg-primary">
    <nav class="flex items-center justify-between mx-auto max-w-[115rem]">
      <a href="#" class="text-2xl font-bold text-white">Wheelz Collaboration</a>

      <a href="#" class="flex items-center gap-2 text-2xl font-bold text-white">
        <i class="fa-solid fa-user" style="color: #ffffff;"></i>
        Admin
      </a>
    </nav>
  </header>

  <div class="flex">
    <!-- Side bar -->

    <aside class="w-full h-screen max-w-xs bg-primary">
      <nav class="pt-[4.5rem]">
        <p class="p-4 text-center border">
          <a href="index.php" class="font-semibold text-white">Dashboard</a>
        </p>
        <p class="p-4 text-center border">
          <a href="DataMobil.php" class="font-semibold text-white">Data Mobil</a>
        </p>
        <p class="p-4 text-center border">
          <a href="inventaris.php" class="font-semibold text-white">Inventaris</a>
        </p>
        <p class="p-4 text-center border">
          <a href="DataPelanggan.php" class="font-semibold text-white">Data Pelanggan</a>
        </p>
        <p class="p-4 text-center border">
          <a href="pembayaranrefund.php" class="font-semibold text-white">Pembayaran & Refund</a>
        </p>
        <p class="p-4 text-center border">
          <a href="reservasi.php" class="font-semibold text-white">Reservasi</a>
        </p>
        <p class="p-4 text-center border">
          <a href="Chat.php" class="font-semibold text-blue-400">Chat</a>
        </p>
      </nav>
    </aside>

    <!-- End Side bar -->

    <!-- Main section -->
    <main class="w-full pt-20">
      <div class="whatsapp-container">
        <div>
          <img src="https://3.bp.blogspot.com/-2fVvKtxqwB0/VUXkWMb--kI/AAAAAAAACI8/ANNIWneBF2Y/s1600/Whatsapp-logo-vector.png" alt="WhatsApp Icon" width="100" />
        </div>
        <a href="https://wa.me/085838767982" target="_blank" class="whatsapp-button">
          <i class="fab fa-whatsapp"></i> Open WhatsApp
        </a>
      </div>
    </main>
    <!-- End Main Section -->
  </div>

  <script src="https://kit.fontawesome.com/c4ce7ec2a0.js" crossorigin="anonymous"></script>
  <script src="./../node_modules/preline/dist/preline.js"></script>

  <script>
    function formatNumber(input) {
      // Remove any existing commas
      let num = input.value.replace(/\D/g, '');

      // Format the number with commas
      let formattedNum = num.replace(/\B(?=(\d{3})+(?!\d))/g, ',');

      // Update the input value with the formatted number
      input.value = formattedNum;
    }
  </script>
</body>

</html>
