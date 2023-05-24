<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Pemesanan extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pemesanan as pemesanan JOIN tb_harga as harga ON pemesanan.pemesanan_id_harga=harga.harga_id JOIN tb_pelanggan as pelanggan ON pemesanan.pemesanan_id_pelanggan=pelanggan.pelanggan_id";
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
        
        $pemesanan_id_harga = $_POST['pemesanan_id_harga'];
        $pemesanan_id_pelanggan = $_POST['pemesanan_id_pelanggan'];
        $pemesanan_tanggal = $_POST['pemesanan_tanggal'];
        $pemesanan_jam = $_POST['pemesanan_jam'];

        $sql = "INSERT INTO tb_pemesanan (pemesanan_id_harga, pemesanan_id_pelanggan, pemesanan_tanggal, pemesanan_jam) VALUES (:pemesanan_id_harga, :pemesanan_id_pelanggan, :pemesanan_tanggal, :pemesanan_jam)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pemesanan_id_harga", $pemesanan_id_harga);
        $stmt->bindParam(":pemesanan_id_pelanggan", $pemesanan_id_pelanggan);
        $stmt->bindParam(":pemesanan_tanggal", $pemesanan_tanggal);
        $stmt->bindParam(":pemesanan_jam", $pemesanan_jam);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_pemesanan as pemesanan JOIN tb_harga as harga ON pemesanan.pemesanan_id_harga=harga.harga_id JOIN tb_pelanggan as pelanggan ON pemesanan.pemesanan_id_pelanggan=pelanggan.pelanggan_id WHERE pemesanan_id=:pemesanan_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pemesanan_id", $id);
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