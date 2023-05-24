
<?php
use App\Transaksi as Transaksi;
use App\Pemesanan as Pemesanan;


$pms = new Transaksi;
$rows = $pms->tampil();
//  var_dump($rows);


?>

<h2>Data Transaksi</h2>

<a href="index.php?hal=transaksi_input" class="btn">Tambah Transaksi</a>

<table>
    <tr>
        <th>ID</th>
        <th>Kategori PS</th>
        <th>Pelanggan</th>
        <th>Tanggal Pemesanan</th>
        <th>Tanggal Transaksi</th>
    </tr>
    <?php foreach ($rows as $row) { 
        $pemesanan = new Pemesanan;
        $dataPemesanan = $pemesanan->edit($row['transaksi_id_pemesanan']);
        ?>
    <tr>
    <td><?php echo $row['transaksi_id']; ?></td>
        <td><?php echo $dataPemesanan['harga_kategori']; ?></td>
        <td><?php echo $dataPemesanan['pelanggan_nama']; ?></td>
        <td><?php echo $dataPemesanan['pemesanan_tanggal']; ?></td>
        <td><?php echo $row['transaksi_tanggal']; ?></td>
    </tr>
    <?php } ?>
</table>