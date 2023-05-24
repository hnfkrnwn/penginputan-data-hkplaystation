<?php
use App\Harga as Harga;
use App\Pelanggan as Pelanggan;
use App\Pemesanan as Pemesanan;

$harga = new Harga;
$pelanggan = new Pelanggan;

$plg = new Pemesanan;
$dataPemesanan = $plg->tampil();

?>

<h2>Masukkan Data Transaksi</h2>

<form action="index.php?hal=transaksi_proses" method="post">
    <table>
        <tr>
            <td>Pemesanan</td>
            <td>
                <select name="transaksi_id_pemesanan" id="">
                    <?php
                    foreach($dataPemesanan as $row) {
                    ?>
                    <option value="<?= $row['pemesanan_id'] ?>"><?= $row['harga_kategori'] ?>/<?= $row['pelanggan_nama'] ?>/<?= $row['pemesanan_tanggal'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr> 
        <tr>
            <td>Tanggal</td>
            <td><input type="date" name="transaksi_tanggal"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>