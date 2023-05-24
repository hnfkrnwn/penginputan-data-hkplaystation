<?php
use App\Harga as Harga;
$kat = new Harga;
$rows = $kat->tampil();

?>

<h2>Daftar Harga</h2>

<a href="index.php?hal=d.harga_input" class="btn">Tambah Kategori</a>

<table>
    <tr>
        <th>No</th>
        <th>Kategori PS</th>
        <th>Harga per Jam</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
    <td><?php echo $row['harga_id']; ?></td>
        <td><?php echo $row['harga_kategori']; ?></td>
        <td><?php echo $row['harga_perjam']; ?></td>
    </tr>
    <?php } ?>
</table>
