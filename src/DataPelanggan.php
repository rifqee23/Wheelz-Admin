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
  <title>Data Pelanggan</title>
  <link rel="stylesheet" href="output.css" />
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
          <a href="DataPelanggan.php" class="font-semibold text-blue-400">Data Pelanggan</a>
        </p>
        <p class="p-4 text-center border">
          <a href="#" class="font-semibold text-white">Pembayaran & Refund</a>
        </p>
        <p class="p-4 text-center border">
          <a href="#" class="font-semibold text-white">Reservasi</a>
        </p>
        <p class="p-4 text-center border">
          <a href="#" class="font-semibold text-white">Chat</a>
        </p>
      </nav>
    </aside>

    <!-- End SIde bar -->

    <!-- Main section -->
    <main class="w-full pt-20">
      <button type="button" class="inline-flex items-center px-3 py-2 text-sm text-white rounded-full hs-dark-mode hs-dark-mode-active:hidden gap-x-2 bg-white/10 hover:bg-white/20" data-hs-theme-click-value="dark">
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
        </svg>
        Dark
      </button>
      <button type="button" class="items-center hidden px-3 py-2 text-sm text-white rounded-full hs-dark-mode hs-dark-mode-active:inline-flex gap-x-2 bg-white/10 hover:bg-white/20" data-hs-theme-click-value="light">
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="4"></circle>
          <path d="M12 2v2"></path>
          <path d="M12 20v2"></path>
          <path d="m4.93 4.93 1.41 1.41"></path>
          <path d="m17.66 17.66 1.41 1.41"></path>
          <path d="M2 12h2"></path>
          <path d="M20 12h2"></path>
          <path d="m6.34 17.66-1.41 1.41"></path>
          <path d="m19.07 4.93-1.41 1.41"></path>
        </svg>
        Light
      </button>

      <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full  inline-block align-middle">
            <div class="overflow-hidden border rounded-lg dark:border-neutral-700">

              <?php include("layout/tableInventaris.php") ?>

            </div>
          </div>
        </div>
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