<?php
use App\Pemesanan as Pemesanan;
$pms = new Pemesanan;
$rows = $pms->tampil();

?>

<h2>Daftar Harga</h2>

<a href="index.php?hal=pemesanan_input" class="btn">Tambah Pemesanan</a>

<table>
    <tr>
        <th>ID</th>
        <th>Jenis PS</th>
        <th>Harga/Jam</th>
        <th>Pelanggan</th>
        <th>Tanggal</th>
        <th>Jam</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
    <td><?php echo $row['pemesanan_id']; ?></td>
        <td><?php echo $row['harga_kategori']; ?></td>
        <td><?php echo $row['harga_perjam']; ?></td>
        <td><?php echo $row['pelanggan_nama']; ?></td>
        <td><?php echo $row['pemesanan_tanggal']; ?></td>
        <td><?php echo $row['pemesanan_jam']; ?></td>
    </tr>
    <?php } ?>
</table>