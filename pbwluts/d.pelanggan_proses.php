<?php

require_once "inc/Koneksi.php";
require_once "app/Pelanggan.php";

$kat = new App\Pelanggan();

if (isset($_POST['btn_simpan'])) {
    $kat->simpan();
    header("location:index.php?hal=data_pelanggan");
}

if (isset($_POST['btn_update'])) {
    $kat->update();
    header("location:index.php?hal=data_pelanggan");
}