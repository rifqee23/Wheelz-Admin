<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pembayaran & Refund</title>
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

  <div class="flex min-h-screen">
    <!-- Side bar -->

    <aside class="flex flex-col w-full max-w-xs bg-primary">
      <nav class="pt-[4.5rem] flex-grow">
        <p class="p-4 text-center border">
          <a href="index.php" class="font-semibold text-white">Dashboard</a>
        </p>
        <p class="p-4 text-center border">
          <a href="DataMobil.php" class="font-semibold text-white">Data Mobil</a>
        </p>

        <p class="p-4 text-center border">
          <a href="DataPelanggan.php" class="font-semibold text-white">Data Pelanggan</a>
        </p>
        <p class="p-4 text-center border">
          <a href="pembayaranrefund.php" class="font-semibold text-blue-400">Pembayaran & Refund</a>
        </p>
        <p class="p-4 text-center border">
          <a href="reservasi.php" class="font-semibold text-white">Reservasi</a>
        </p>
        <p class="p-4 text-center border">
          <a href="Chat.php" class="font-semibold text-white">Chat</a>
        </p>
      </nav>
    </aside>

    <!-- End SIde bar -->

    <!-- Main section -->
    <main class="w-full pt-20 ">
      <div class="mb-5 ps-5">
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

      </div>

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

      <div class="flex flex-col w-full mx-auto">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full  inline-block align-middle">
            <h1 class="mb-5 text-2xl font-bold text-center text-white">Pembayaran</h1>

            <div class="container mx-auto overflow-hidden border rounded-lg dark:border-neutral-700">
              <?php include("layout/tablePembayaran.php") ?>
              <nav class="flex items-center gap-x-1">
                <button type="button" class="min-h-[32px] min-w-8 py-2 px-2 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                  <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                  </svg>
                  <span aria-hidden="true" class="sr-only">Previous</span>
                </button>
                <div class="flex items-center gap-x-1">
                  <span class="min-h-[32px] min-w-8 flex justify-center items-center border border-gray-200 text-gray-800 py-1 px-3 text-sm rounded-lg focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-white dark:focus:bg-neutral-800">1</span>
                  <span class="min-h-[32px] flex justify-center items-center text-gray-500 py-1.5 px-1.5 text-sm dark:text-neutral-500">of</span>
                  <span class="min-h-[32px] flex justify-center items-center text-gray-500 py-1.5 px-1.5 text-sm dark:text-neutral-500">3</span>
                </div>
                <button type="button" class="min-h-[32px] min-w-8 py-2 px-2 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                  <span aria-hidden="true" class="sr-only">Next</span>
                  <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                  </svg>
                </button>
              </nav>
            </div>

            <h1 class="mt-10 text-2xl font-bold text-center text-white">Refund</h1>

            <!-- Refund -->
            <div class="container mx-auto mt-10 overflow-hidden border rounded-lg dark:border-neutral-700">

              <?php include("layout/tableRefund.php") ?>
              <nav class="flex items-center gap-x-1">
                <button type="button" class="min-h-[32px] min-w-8 py-2 px-2 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                  <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                  </svg>
                  <span aria-hidden="true" class="sr-only">Previous</span>
                </button>
                <div class="flex items-center gap-x-1">
                  <span class="min-h-[32px] min-w-8 flex justify-center items-center border border-gray-200 text-gray-800 py-1 px-3 text-sm rounded-lg focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-white dark:focus:bg-neutral-800">1</span>
                  <span class="min-h-[32px] flex justify-center items-center text-gray-500 py-1.5 px-1.5 text-sm dark:text-neutral-500">of</span>
                  <span class="min-h-[32px] flex justify-center items-center text-gray-500 py-1.5 px-1.5 text-sm dark:text-neutral-500">3</span>
                </div>
                <button type="button" class="min-h-[32px] min-w-8 py-2 px-2 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                  <span aria-hidden="true" class="sr-only">Next</span>
                  <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                  </svg>
                </button>
              </nav>
            </div>
            <!-- Refund End -->


          </div>
        </div>
      </div>
    </main>
    <!-- End Main Section -->
  </div>

  <script src="./../node_modules/preline/dist/preline.js"></script>

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