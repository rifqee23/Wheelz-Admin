<?php

include("./crud/koneksi.php");


$sql = "SELECT * FROM Vehicle LIMIT 5";
$result = mysqli_query($conn, $sql);

?>




<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Data Mobil</title>
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

  <div class="flex min-h-screen ">
    <aside class="flex flex-col w-full max-w-xs bg-primary">
      <nav class="pt-[4.5rem] flex-grow">
        <p class="p-4 text-center border">
          <a href="index.php" class="font-semibold text-white">Dashboard</a>
        </p>
        <p class="p-4 text-center border">
          <a href="DataMobil.php" class="font-semibold text-blue-400">Data Mobil</a>
        </p>

        <p class="hidden p-4 text-center border">
          <a href="editDataMobil.php" class="font-semibold text-white ">Edit Data Mobil</a>
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
          <a href="Chat.php" class="font-semibold text-white">Chat</a>
        </p>
      </nav>
    </aside>

    <main class="w-full pt-20">

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



      <div class="mb-5">
        <button type="button" class="inline-flex items-center px-1 py-1 text-base font-semibold text-white border border-transparent rounded-lg pe-2 ms-4 gap-x-2 bg-primary hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-vertically-centered-modal">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 5l0 14" />
            <path d="M5 12l14 0" />
          </svg>
          Tambah
        </button>
      </div>

      <div id="hs-vertically-centered-modal" class="hs-overlay hidden size-full fixed top-0 start-20 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div class="hs-overlay-open:mt-7 w-full  hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0  opacity-0 ease-out transition-all lg:max-w-3xl m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
          <div class="flex flex-col w-full border shadow-sm pointer-events-auto bg-root rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
              <h3 class="w-full font-bold text-center text-gray-800 dark:text-white">
                Data Mobil
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

                <div class="w-1/2">
                  <div class="max-w-sm p-4">
                    <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Car Only</label>
                    <input type="text" id="input-label" name="only" oninput="formatNumber(this)" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="cth: 600.000,00">

                    <label for="input-label" class="block mt-2 mb-2 text-sm font-medium dark:text-white">Car Only Driver</label>
                    <input type="text" id="input-label" name="driver" oninput="formatNumber(this)" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="cth: 600.000,00">

                    <label for="input-label" class="block mt-2 mb-2 text-sm font-medium dark:text-white">Car Only Driver Fuel</label>
                    <input type="text" id="input-label" name="fuel" oninput="formatNumber(this)" class="block w-full px-4 py-3 mb-2 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="cth: 600.000,00">

                    <div class="max-w-sm">
                      <label for="file-input" class="block mt-2 mb-2 text-sm font-medium dark:text-white">Input Photo</label>
                      <input type="file" name="gambar" id="file-input" class="block w-full text-sm border border-gray-200 rounded-lg shadow-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 file:bg-gray-50 file:border-0 file:me-4 file:py-3 file:px-4 dark:file:bg-neutral-700 dark:file:text-neutral-400">
                    </div>

                  </div>
                </div>
              </div>
              <div class="flex items-center justify-end px-4 py-3 border-t dark:border-neutral-700">
                <button type="submit" name="submit" class="px-3 py-2 font-bold text-white bg-blue-600 rounded-lg hover:bg-blue-700">Tambah Data</button>
              </div>

            </form>
          </div>
        </div>
      </div>

      <!-- End Modal -->

      <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full  inline-block align-middle">
            <div class="overflow-hidden border rounded-lg dark:border-neutral-700">

              <table class="w-full divide-y divide-gray-200 dark:divide-neutral-700">
                <thead>
                  <tr>

                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                      gambar
                    </th>

                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                      Model
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                      nomor polisi
                    </th>
                    <th scope="col" class="py-3 text-xs font-medium text-gray-500 uppercase ps-6 text-start dark:text-neutral-500">
                      nama mobil
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                      seat
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                      car only
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                      car only driver
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                      car only driver fuel
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">

                  <?php if (mysqli_num_rows($result) > 0) : ?>
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>

                      <tr>

                        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                          <img class="w-40" src="./asset/carImg/<?php echo $row["gambar"] ?>" alt="">
                        </td>

                        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                          <?php echo $row["model"] ?>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                          <?php echo $row["nomor_polisi"] ?>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                          <?php echo $row["nama_mobil"] ?>
                        </td>

                        <td class="px-8 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                          <?php echo $row["seat"] ?>
                        </td>

                        <td class="px-8 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                          <?php echo "Rp." . $row["car_only"] . ",00" ?>
                        </td>

                        <td class="px-8 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                          <?php echo "Rp." . $row["car_only_driver"] . ",00" ?>
                        </td>

                        <td class="px-8 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                          <?php echo "Rp." . $row["car_only_driver_fuel"] . ",00" ?>
                        </td>

                        <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-start">
                          <div>
                            <a href="editDataMobil.php?id=<?php echo $row["id"] ?>" type="button" class="inline-flex items-center text-sm font-semibold text-blue-600 border border-transparent rounded-lg gap-x-2 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">
                              Edit
                            </a>
                          </div>

                          <div>
                            <a href="crud/deleteDataMobil.php?id=<?php echo $row["id"] ?>" type="button" class="inline-flex items-center text-sm font-semibold text-blue-600 border border-transparent rounded-lg gap-x-2 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">
                              Delete
                            </a>

                          </div>
                        </td>
                      </tr>

                    <?php endwhile; ?>
                  <?php endif; ?>

                </tbody>
              </table>

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
          </div>
        </div>
      </div>
    </main>
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