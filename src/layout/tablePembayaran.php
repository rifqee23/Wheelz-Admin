<table class="w-full divide-y divide-gray-200 dark:divide-neutral-700">
  <thead>
    <tr>

      <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
        Ref
      </th>

      <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
        Kendaraan
      </th>
      <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
        Waktu
      </th>
      <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
        Harga
      </th>
      <th scope="col" class="py-3 text-xs font-medium text-gray-500 uppercase ps-6 text-start dark:text-neutral-500">
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
      $sql = "SELECT u.nama, r.alamat, u.buktipembayaran, u.status FROM rincian r JOIN user u ON r.id_user = u.id;";
      $rs = mysqli_query($conn, $sql);
      $i = 1;
      while ($row = mysqli_fetch_assoc($rs)) :

      ?>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php echo $i++; ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php
          echo $row["ref"];
          ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <?php
          echo $row["kendaraan"];
          ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
        <?php
          echo $row["waktu"];
          ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
        <?php
          echo $row["harga"];
          ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
        <?php
          echo $row["status"];
          ?>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
          <div>
            <button class="text-sm font-semibold text-blue-600 hover:text-blue-800">
              Edit
            </button>
          </div>

          <div class="mt-4">
            <button class="text-sm font-semibold text-blue-600 hover:text-blue-800">
              Delete
            </button>
          </div>
        </td>
    </tr>
  <?php
      endwhile;
  ?>
  </tbody>
</table>