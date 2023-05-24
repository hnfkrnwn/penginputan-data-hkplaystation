<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HK Playstation</title>

      <link rel="shortcut icon" href="layouts/assets/img/hklogos.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/hklogos.png" class="brand">
                  <div class="user">HK PLAYSTATION</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Beranda
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=daftar_harga">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Daftar Harga
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=data_pelanggan">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Data Pelanggan
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=pemesanan">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Pemesanan
                              </a>
                        </li>
                        
                        <li>
                              <a href="index.php?hal=data_transaksi">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Data Transaksi
                              </a>
                        </li>
      
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Hanif Kurniawan Matanari
            </footer>
      </main>

</body>

</html>