

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

        <!-- Modal -->
        <div id="hs-vertically-centered-modal" class="hs-overlay hidden size-full fixed top-0 start-20 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
          <div class="hs-overlay-open:mt-7 w-full  hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0  opacity-0 ease-out transition-all lg:max-w-3xl m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div class="flex flex-col w-full border shadow-sm pointer-events-auto bg-root rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
              <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                <h3 class="w-full font-bold text-center text-gray-800 dark:text-white">
                  Data Pelanggan
                </h3>
                <button type="button" class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-vertically-centered-modal">
                  <span class="sr-only">Close</span>
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                  </svg>
                </button>
              </div>

            <form action="./crud/upload_gambar.php" method="post" enctype="multipart/form-data">
              <div class="flex">
                <div class="w-1/2">
                  <div class="max-w-sm p-4">
                      <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Model</label>
                      <input type="text" id="input-label" name="model" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="cth: Audi">

                      <label for="input-label" class="block mt-2 mb-2 text-sm font-medium dark:text-white">Nomor Polisi</label>
                      <input type="text" id="input-label" name="nopol" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="cth: BE 1234 AB">

                      <label for="input-label" class="block mt-2 mb-2 text-sm font-medium dark:text-white">Nama Mobil</label>
                      <input type="text" id="input-label" name="mobil" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="cth: Audi AeT">

                      <label for="input-label" class="block mt-2 mb-2 text-sm font-medium dark:text-white">Seat</label>
                      <input type="number" id="input-label" name="seat" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="cth: 4">

                  </div>
                </div>
              </div>
              
              </form>
            </div>
          </div>
        </div>

        <!-- End Modal -->

        <div class="flex flex-col">
          <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full  inline-block align-middle">
              <div
              class="overflow-hidden border rounded-lg dark:border-neutral-700"
              >
             
                <?php include("layout/tableDataPelanggan.php") ?>
               
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