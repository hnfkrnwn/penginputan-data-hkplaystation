
<?php
use App\Pelanggan as Pelanggan;
$kat = new Pelanggan;
$rows = $kat->tampil();

?>


<h2>Data Pelanggan</h2>

<a href="index.php?hal=d.pelanggan_input" class="btn">Tambah Pelanggan</a>

    <table>
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>No Hp</th>
    <th>Alamat</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
    <td><?php echo $row['pelanggan_id']; ?></td>
        <td><?php echo $row['pelanggan_nama']; ?></td>
        <td><?php echo $row['pelanggan_nohp']; ?></td>
        <td><?php echo $row['pelanggan_alamat']; ?></td>
        
    </tr>
    <?php } ?>
</table>
