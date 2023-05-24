<?php

require_once "inc/Koneksi.php";
require_once "app/Transaksi.php";

$kat = new App\Transaksi();

if (isset($_POST['btn_simpan'])) {
    $kat->simpan();
    header("location:index.php?hal=data_transaksi");
}

if (isset($_POST['btn_update'])) {
    $kat->update();
    header("location:index.php?hal=data_transaksi");
}