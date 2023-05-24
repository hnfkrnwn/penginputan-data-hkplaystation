<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Pelanggan extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pelanggan";
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
        
        $pelanggan_nama = $_POST['pelanggan_nama'];
        $pelanggan_nohp = $_POST['pelanggan_nohp'];
        $pelanggan_alamat = $_POST['pelanggan_alamat'];

        $sql = "INSERT INTO tb_pelanggan (pelanggan_nama, pelanggan_nohp, pelanggan_alamat) VALUES (:pelanggan_nama, :pelanggan_nohp, :pelanggan_alamat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pelanggan_nama", $pelanggan_nama);
        $stmt->bindParam(":pelanggan_nohp", $pelanggan_nohp);
        $stmt->bindParam(":pelanggan_alamat", $pelanggan_alamat);
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