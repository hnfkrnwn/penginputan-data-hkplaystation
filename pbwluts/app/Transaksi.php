<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Transaksi extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_transaksi";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $transaksi_id_pemesanan = $_POST['transaksi_id_pemesanan'];
        $transaksi_tanggal = $_POST['transaksi_tanggal'];

        $sql = "INSERT INTO tb_transaksi (transaksi_id_pemesanan, transaksi_tanggal) VALUES (:transaksi_id_pemesanan, :transaksi_tanggal)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":transaksi_id_pemesanan", $transaksi_id_pemesanan);
        $stmt->bindParam(":transaksi_tanggal", $transaksi_tanggal);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_harga WHERE cat_id=:cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $cat_name = $_POST['cat_name'];
        $cat_text = $_POST['cat_text'];
        $cat_id = $_POST['cat_id'];

        $sql = "UPDATE tb_harga SET cat_name=:cat_name, cat_text=:cat_text WHERE cat_id=:cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_name", $cat_name);
        $stmt->bindParam(":cat_text", $cat_text);
        $stmt->bindParam(":cat_id", $cat_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_harga WHERE cat_id=:cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_id", $id);
        $stmt->execute();

    }

}