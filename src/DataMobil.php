<?php

include("./crud/koneksi.php");

$num_per_page =9;
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
    <title>Data Mobil</title>
    <link rel="stylesheet" href="output.css" />
  </head>
  <body class="bg-root dark:bg-slate-600">
    <header class="fixed w-full bg-primary px-4 py-4">
      <nav class="flex items-center justify-between mx-auto max-w-[115rem]">
        <a href="#" class="text-white font-bold text-2xl"
          >Wheelz Collaboration</a
        >

        <a
          href="#"
          class="flex items-center text-white text-2xl font-bold gap-2"
        >
        <i class="fa-solid fa-user" style="color: #ffffff;"></i>
          Admin
        </a>
      </nav>
    </header>

    <div class="flex">
      <aside class="w-full h-screen bg-primary max-w-xs">
        <nav class="pt-[4.5rem]">
          <p class="text-center border p-4">
            <a href="index.php" class="text-white font-semibold">Dashboard</a>
          </p>
          <p class="text-center border p-4">
            <a href="DataMobil.php" class="text-blue-400 font-semibold"
              >Data Mobil</a
            >
          </p>
          <p class="text-center border p-4">
            <a href="#" class="text-white font-semibold">Inventaris</a>
          </p>
          <p class="text-center border p-4">
            <a href="#" class="text-white font-semibold">Data Pelanggan</a>
          </p>
          <p class="text-center border p-4">
            <a href="#" class="text-white font-semibold">Pembayaran & Refund</a>
          </p>
          <p class="text-center border p-4">
            <a href="#" class="text-white font-semibold">Reservasi</a>
          </p>
          <p class="text-center border p-4">
            <a href="#" class="text-white font-semibold">Chat</a>
          </p>
        </nav>
      </aside>

      <main class="w-full pt-20">
      <button type="button" class="hs-dark-mode hs-dark-mode-active:hidden inline-flex items-center gap-x-2 py-2 px-3 bg-white/10 rounded-full text-sm text-white hover:bg-white/20" data-hs-theme-click-value="dark">
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
        </svg>
        Dark
      </button>
      <button type="button" class="hs-dark-mode hs-dark-mode-active:inline-flex hidden items-center gap-x-2 py-2 px-3 bg-white/10 rounded-full text-sm text-white hover:bg-white/20" data-hs-theme-click-value="light">
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



      <div>
        <button type="button" class="py-1 px-1 pe-2 ms-4  inline-flex items-center gap-x-2 text-base  font-semibold rounded-lg border border-transparent bg-primary text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-vertically-centered-modal">
        <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon icon-tabler icon-tabler-plus"
              width="30"
              height="30"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="#00b341"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M12 5l0 14" />
              <path d="M5 12l14 0" />
            </svg>
          Tambah
        </button>
         </div>

        <div id="hs-vertically-centered-modal" class="hs-overlay hidden size-full fixed top-0 start-20 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
          <div class="hs-overlay-open:mt-7 w-full  hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0  opacity-0 ease-out transition-all lg:max-w-3xl m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div class="w-full flex flex-col bg-root border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
              <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 class="font-bold text-center w-full text-gray-800 dark:text-white">
                  Data Mobil
                </h3>
                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-vertically-centered-modal">
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
                      <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Model</label>
                      <input type="text" id="input-label" name="model" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="cth: Audi">

                      <label for="input-label" class="block text-sm font-medium mt-2 mb-2 dark:text-white">Nomor Polisi</label>
                      <input type="text" id="input-label" name="nopol" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="cth: BE 1234 AB">

                      <label for="input-label" class="block text-sm font-medium mt-2 mb-2 dark:text-white">Nama Mobil</label>
                      <input type="text" id="input-label" name="mobil" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="cth: Audi AeT">

                      <label for="input-label" class="block text-sm font-medium mt-2 mb-2 dark:text-white">Seat</label>
                      <input type="number" id="input-label" name="seat" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="cth: 4">

                  </div>
                </div>

                <div class="w-1/2">
                <div class="max-w-sm p-4">
                      <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Car Only</label>
                      <input type="text" id="input-label" name="only" oninput="formatNumber(this)" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="cth: 600.000,00">

                      <label for="input-label" class="block text-sm font-medium mt-2 mb-2 dark:text-white">Car Only Driver</label>
                      <input type="text" id="input-label" name="driver" oninput="formatNumber(this)" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="cth: 600.000,00">

                      <label for="input-label" class="block text-sm font-medium mt-2 mb-2 dark:text-white">Car Only Driver Fuel</label>
                      <input type="text" id="input-label" name="fuel" oninput="formatNumber(this)" class="py-3 px-4 block w-full mb-2 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="cth: 600.000,00">

                      <div class="max-w-sm">
                      <label for="file-input" class="block text-sm font-medium mt-2 mb-2 dark:text-white">Car Only Driver Fuel</label>
                        <input type="file" name="gambar" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                          file:bg-gray-50 file:border-0
                          file:me-4
                          file:py-3 file:px-4
                          dark:file:bg-neutral-700 dark:file:text-neutral-400">
                      </div>
                      
                  </div>
                </div>
              </div>
              <div class="flex justify-end items-center py-3 px-4 border-t dark:border-neutral-700">
                <button type="submit" name="submit" class="py-2 px-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700">Tambah Data</button>
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
              class="border rounded-lg overflow-hidden dark:border-neutral-700"
              >
             
                <table
                  class="w-full divide-y divide-gray-200 dark:divide-neutral-700"
                >
                  <thead>
                    <tr>

                    <th
                        scope="col"
                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500"
                      >
                       gambar
                      </th>

                      <th
                        scope="col"
                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500"
                      >
                        Model
                      </th>
                      <th
                        scope="col"
                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500"
                      >
                        nomor polisi
                      </th>
                      <th
                        scope="col"
                        class="ps-6 py-3  text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500"
                      >
                        nama mobil
                      </th>
                      <th
                        scope="col"
                        class="px-6 py-3  text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500"
                      >
                        seat
                      </th>
                      <th
                        scope="col"
                        class="px-6 py-3  text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500"
                      >
                        car only
                      </th>
                      <th
                        scope="col"
                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500"
                      >
                        car only driver
                      </th>
                      <th
                        scope="col"
                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500"
                      >
                        car only driver fuel
                      </th>
                      <th
                        scope="col"
                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500"
                      >
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody
                    class="divide-y divide-gray-200 dark:divide-neutral-700"
                  >

                  <?php if (mysqli_num_rows($result) > 0) : ?>
                    <?php while($row = mysqli_fetch_assoc($result)) : ?>
                  
                    <tr>

                    <td
                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200"
                      >
                        <img class="w-40" src="./asset/carImg/<?php echo $row["gambar"] ?>" alt="">
                      </td>

                      <td
                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200"
                      >
                        <?php echo $row["model"] ?>
                      </td>
                      <td
                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"
                      >
                      <?php echo $row["nomor_polisi"] ?>
                      </td>
                      <td
                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"
                      >
                      <?php echo $row["nama_mobil"] ?>
                      </td>

                      <td
                        class="px-8  py-4 whitespace-nowrap text-sm  text-gray-800 dark:text-neutral-200"
                      >
                      <?php echo $row["seat"] ?>
                      </td>

                      <td
                        class="px-8  py-4 whitespace-nowrap text-sm  text-gray-800 dark:text-neutral-200"
                      >
                      <?php echo "Rp." . $row["car_only"] . ",00" ?>
                      </td>

                      <td
                        class="px-8  py-4 whitespace-nowrap text-sm  text-gray-800 dark:text-neutral-200"
                      >
                      <?php echo "Rp." . $row["car_only_driver"] . ",00" ?>
                      </td>
                      
                      <td
                        class="px-8  py-4 whitespace-nowrap text-sm  text-gray-800 dark:text-neutral-200"
                      >
                      <?php echo "Rp." . $row["car_only_driver_fuel"] . ",00" ?>
                      </td>

                      <td
                        class="px-6 py-4 whitespace-nowrap text-start text-sm font-medium"
                      >
                      <div>
                        <button
                          type="button"
                          class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400"
                        >
                          Edit
                        </button>
                      </div>

                      <div>
                        <button
                          type="button"
                          class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400"
                        >
                          Delete
                        </button>

                      </div>
                      </td>
                    </tr>
                   
                    <?php endwhile; ?>
                  <?php endif; ?>
                    
                  </tbody>
                </table>
               
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
