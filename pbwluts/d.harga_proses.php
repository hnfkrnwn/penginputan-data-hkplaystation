<?php

require_once "inc/Koneksi.php";
require_once "app/Harga.php";

$kat = new App\Harga();

if (isset($_POST['btn_simpan'])) {
    $kat->simpan();
    header("location:index.php?hal=daftar_harga");
}

if (isset($_POST['btn_update'])) {
    $kat->update();
    header("location:index.php?hal=daftar_harga");
}