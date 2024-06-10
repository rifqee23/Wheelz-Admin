<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Admin</title>
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
    <aside class="w-full h-screen max-w-xs bg-primary">
      <nav class="pt-[4.5rem]">
        <p class="p-4 text-center border">
          <a href="index.php" class="font-semibold text-blue-400">Dashboard</a>
        </p>
        <p class="p-4 text-center border">
          <a href="DataMobil.php" class="font-semibold text-white">Data Mobil</a>
        </p>

        <p class="p-4 text-center border">
          <a href="DataPelanggan.php" class="font-semibold text-white">Data Pelanggan</a>
        </p>
        <p class="p-4 text-center border">
          <a href="pembayaranrefund.php" class="font-semibold text-white">Pembayaran & Refund</a>
        </p>
        <p class="p-4 text-center border">
          <a href="#" class="font-semibold text-white">Reservasi</a>
        </p>
        <p class="p-4 text-center border">
          <a href="Chat.php" class="font-semibold text-white">Chat</a>
        </p>
      </nav>
    </aside>

    <main class="w-full">
      <section class="container flex justify-center w-full mx-auto pt-28 lg:px-5">
        <div class="flex w-full max-w-xs px-3 pt-8 bg-white h-36">
          <div class="w-[60%]">
            <span class="block text-lg font-bold text-blue-600">Data Mobil</span>
            <p class="font-bold 2xl:text-3xl 2xl:mt-0 lg:mt-6 lg:text-2xl">
              130 Mobil
            </p>
          </div>
          <div class="w-[40%]">
            <img src="asset/Iconly/Bold/car.svg" alt="" />
          </div>
        </div>

        <div class="flex w-full max-w-xs px-3 pt-8 bg-white ms-20 h-36">
          <div class="w-[60%]">
            <span class="block text-lg font-bold text-blue-600">Data Pemesanan</span>
            <p class="font-bold 2xl:text-3xl lg:text-2xl">32 Pesanan</p>
          </div>
          <div class="w-[40%]">
            <img src="asset/Iconly/Bold/car.svg" alt="" />
          </div>
        </div>

        <div class="flex w-full max-w-xs px-3 pt-8 bg-white ms-20 h-36">
          <div class="w-[60%]">
            <span class="block text-lg font-bold text-blue-600">Data Akun</span>
            <p class="font-bold 2xl:text-3xl lg:text-2xl 2xl:mt-0 lg:mt-7">
              40 Akun
            </p>
          </div>
          <div class="w-[40%]">
            <img src="asset/Iconly/Bold/car.svg" alt="" />
          </div>
        </div>
      </section>

      <section class="mt-16 2xl:ms-96 bg-white 2xl:max-w-[70rem] lg:max-w-3xl mx-auto w-full">
        <div class="relative">
          <div class="absolute inset-0 bg-root opacity-60"></div>
          <span class="relative z-10 font-bold ps-4">Akun yang sedang login</span>
        </div>

        <div class="flex py-12 ps-12">
          <div class="2xl:w-2/5 lg:w-2/5">
            <img class="w-64" src="asset/image 4(1).png" alt="" />
          </div>

          <div class="2xl:w-3/5 lg:w-3/5">
            <ul>
              <li>
                Nama <span class="2xl:ps-44 lg:ps-32">:</span>Administrator
              </li>
              <li>Username <span class="2xl:ps-36 lg:ps-24">:</span>admin</li>
              <li>
                Tanggal & Waktu Login
                <span class="2xl:ps-[3.2rem] lg:ps-1">:</span>
                <span id="tanggal" class="font-semibold"></span>
              </li>
              <li>
                Server
                <span class="2xl:ps-[10.6rem] lg:ps-[7.7rem]">:</span>
                localhost
              </li>
            </ul>
          </div>
        </div>
      </section>
    </main>
  </div>

  <script src="https://kit.fontawesome.com/c4ce7ec2a0.js" crossorigin="anonymous"></script>


  <script>
    const waktu = () => {
      const date = new Date();
      const tanggal = document.getElementById("tanggal");
      let day = date.getDate();
      let month = date.getMonth();
      let year = date.getFullYear();

      let hours = date.getHours();
      let minutes = date.getMinutes();
      let seconds = date.getSeconds();

      minutes = minutes < 10 ? '0' + minutes : minutes;
      seconds = seconds < 10 ? '0' + seconds : seconds;

      let currentDate = `${day} ${month} ${year}  <span class="ps-4">${hours}:${minutes}:${seconds}</span>`;
      tanggal.innerHTML = currentDate;
    };

    setInterval(waktu, 1000);
  </script>

  <script src="./script/darkMode.js"></script>

</body>

</html>