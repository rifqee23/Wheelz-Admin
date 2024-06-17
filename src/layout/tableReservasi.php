<table class="w-full divide-y divide-gray-200 dark:divide-neutral-700">
  <thead>
    <tr>

      <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
        No
      </th>

      <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
        Nama
      </th>
      <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
        Alamat
      </th>
      <th scope="col" class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercase dark:text-neutral-500">
        Nama Mobil
      </th>
      <th scope="col" class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercase dark:text-neutral-500">
        Tanggal Rental
      </th>
      <th scope="col" class="py-3 text-xs font-medium text-gray-500 uppercase ps-6 text-start dark:text-neutral-500">
        Status
      </th>


    </tr>
  </thead>
  <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">



    <tr>

      <?php
      include "crud/koneksi.php";
      $sql = "SELECT u.nama, r.alamat, v.nama_mobil, r.tanggalAwal, r.tanggalTujuan, CASE WHEN p.status = 'Verified' THEN 'Sedang dipinjam' WHEN p.status = 'Done' THEN 'selesai' END AS status FROM pembayaran p JOIN user u ON p.id_user = u.id JOIN Vehicle v ON p.id_vehicle = v.id JOIN rincian r ON p.id_rincian = r.id_pemesanan WHERE p.status IN ('Verified', 'done') LIMIT 9;
  ";
      $rs = mysqli_query($conn, $sql);
      $i = 1;
      while ($row = mysqli_fetch_assoc($rs)) :
      ?>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php echo $i++; ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php
          echo $row["nama"];
          ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php
          echo $row["alamat"];
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
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php
          echo $row["status"];
          ?>
        </td>

    </tr>
  <?php
      endwhile;
  ?>
  </tbody>
</table>