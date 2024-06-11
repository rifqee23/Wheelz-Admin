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
        Email
      </th>
      <th scope="col" class="py-3 text-xs font-medium text-gray-500 uppercase ps-6 text-start dark:text-neutral-500">
        No Handphone
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
      $jumlahDataPerHalaman = 5;
      // Fetch data from the database
      $rs = mysqli_query($conn, "SELECT COUNT(*) AS total FROM user");
      $row = mysqli_fetch_assoc($rs);
      $totalRows = $row['total'];

      // Calculate the number of pages
      $jumlahHalaman = ceil($totalRows / $jumlahDataPerHalaman);

      $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
      $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

      $sql = "SELECT * FROM user LIMIT $awalData, $jumlahDataPerHalaman;";
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
          echo $row["email"];
          ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php
          echo $row["notelp"];
          ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <div class="mt-4">
            <a href="editDataPelanggan.php?id=<?= $row["id"] ?>" class="text-sm font-semibold text-blue-600 hover:text-blue-800">
              Edit
            </a>
          </div>

          <div class="mt-4">
            <a href="crud/deleteDataPelanggan.php?id=<?= $row["id"] ?>" class="text-sm font-semibold text-blue-600 hover:text-blue-800">
              Delete
            </a>
          </div>
        </td>
    </tr>
  <?php
      endwhile;
  ?>
  </tbody>
</table>