<?php

require_once "inc/Koneksi.php";
require_once "app/Pemesanan.php";

$kat = new App\Pemesanan();

if (isset($_POST['btn_simpan'])) {
    $kat->simpan();
    header("location:index.php?hal=pemesanan");
}

if (isset($_POST['btn_update'])) {
    $kat->update();
    header("location:index.php?hal=pemesanan");
}