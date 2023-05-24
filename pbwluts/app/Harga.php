<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Harga extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_harga";
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
        
        $harga_kategori = $_POST['harga_kategori'];
        $harga_perjam = $_POST['harga_perjam'];
        

        $sql = "INSERT INTO tb_harga (harga_kategori, harga_perjam) VALUES (:harga_kategori, :harga_perjam)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":harga_kategori", $harga_kategori);
        $stmt->bindParam(":harga_perjam", $harga_perjam);
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