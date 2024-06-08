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

      <?php
      include "crud/koneksi.php";
      $sql = "SELECT u.nama, r.alamat, u.email, u.notelp FROM rincian r JOIN user u ON r.id_user = u.id;";
      $rs = mysqli_query($conn, $sql);
      if (mysqli_num_rows($rs) > 0) :
        while ($row = mysqli_fetch_assoc($rs)) :

      ?>
          <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
            1
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
          <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
            yantokedaton18@gmail.com
          </td>
          <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
            081216547462
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
      endif;
?>
  </tbody>
</table>