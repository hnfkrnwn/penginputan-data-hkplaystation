<?php
use App\Harga as Harga;
use App\Pelanggan as Pelanggan;

$hrg = new Harga;
$dataHarga = $hrg->tampil();

$plg = new Pelanggan;
$dataPelanggan = $plg->tampil();

?>

<h2>Masukkan Data Pelanggan</h2>

<form action="index.php?hal=pemesanan_proses" method="post">
    <table>
        <tr>
            <td>Kategori</td>
            <td>
                <select name="pemesanan_id_harga" id="">
                    <?php
                    foreach($dataHarga as $row) {
                    ?>
                    <option value="<?= $row['harga_id'] ?>"><?= $row['harga_kategori'] ?>/<?= $row['harga_perjam'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Pelanggan</td>
            <td>
                <select name="pemesanan_id_pelanggan" id="">
                    <?php
                    foreach($dataPelanggan as $row) {
                    ?>
                    <option value="<?= $row['pelanggan_id'] ?>"><?= $row['pelanggan_nama'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>   
        <tr>
            <td>Tanggal</td>
            <td><input type="date" name="pemesanan_tanggal"></td>
        </tr>
        
        <tr>
            <td>Waktu(jam)</td>
            <td><input type="number" name="pemesanan_jam"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>