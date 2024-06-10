<table class="w-full divide-y divide-gray-200 dark:divide-neutral-700">
  <thead>
    <tr>

      <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
        No
      </th>
      <th scope="col" class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercase dark:text-neutral-500">
        Bukti Bayar
      </th>

      <th scope="col" class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercase dark:text-neutral-500">
        Nama
      </th>

      <th scope="col" class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercasedark:text-neutral-500">
        Ref
      </th>

      <th scope="col" class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercase dark:text-neutral-500">
        Kendaraan
      </th>
      <th scope="col" class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercase dark:text-neutral-500">
        Waktu
      </th>
      <th scope="col" class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercase dark:text-neutral-500">
        Harga
      </th>
      <th scope="col" class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercase ps-6 dark:text-neutral-500">
        Status
      </th>

      <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
        Action
      </th>
    </tr>
  </thead>
  <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">

    <tr>

    <tr>

      <?php
      include "crud/koneksi.php";
      $sql = "SELECT 
      p.bukti_bayar,
      u.nama,
      p.ref,
      v.nama_mobil,
      r.tanggalAwal,
      r.tanggalTujuan,
      v.car_only,
      p.Status
  FROM 
      pembayaran p
  JOIN 
      user u ON p.id_user = u.id
  JOIN 
      Vehicle v ON p.id_vehicle = v.id
  JOIN 
      rincian r ON p.id_rincian = r.id_pemesanan";
      $rs = mysqli_query($conn, $sql);
      $i = 1;
      while ($row = mysqli_fetch_assoc($rs)) :

      ?>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php echo $i++; ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <img class="h-[200px] w-[200px] object-cover object-top mx-auto" src="asset/bukti_bayar/<?= $row["bukti_bayar"] ?>" alt="">
        </td>
        <td class="px-6 py-4 text-sm font-medium text-center text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php
          echo $row["nama"];
          ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-center text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php
          echo $row["ref"];
          ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-center text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php
          echo $row["nama_mobil"];
          ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-center text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php
          echo $row["tanggalAwal"] . "  -  " . $row["tanggalTujuan"];
          ?>
        </td>

        <td class="px-6 py-4 text-sm font-medium text-center text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php
          echo $row["car_only"];
          ?>
        </td>

        <td class="px-6 py-4 text-sm font-medium text-center text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php
          echo $row["Status"];
          ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <div>
            <button class="text-sm font-semibold text-blue-600 hover:text-blue-800">
              Konfirmasi
            </button>
          </div>

          <div class="mt-4">
            <button class="text-sm font-semibold text-blue-600 hover:text-blue-800">
              Tolak
            </button>
          </div>
        </td>
    </tr>
  <?php
      endwhile;
  ?>
  </tbody>
</table>