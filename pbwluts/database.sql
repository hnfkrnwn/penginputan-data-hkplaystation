CREATE TABLE tb_harga (
      harga_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
      harga_kategori VARCHAR (50) NOT NULL,
      harga_perjam VARCHAR (50) NOT NULL
);

CREATE TABLE tb_pelanggan (
      pelanggan_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
      pelanggan_nama VARCHAR(100) NOT NULL,
      pelanggan_nohp TEXT DEFAULT NULL,
      pelanggan_alamat TEXT DEFAULT NULL

);

CREATE TABLE tb_pemesanan (
      pemesanan_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
      pemesanan_id_harga INT(11) NOT NULL,
      pemesanan_id_pelanggan INT(11) NOT NULL,
      pemesanan_tanggal DATE  NOT NULL,
      pemesanan_jam INT (11) NOT NULL,
      FOREIGN KEY (pemesanan_id_harga) REFERENCES tb_harga (harga_id) ON UPDATE CASCADE ON DELETE RESTRICT,
      FOREIGN KEY (pemesanan_id_pelanggan) REFERENCES tb_pelanggan (pelanggan_id) ON UPDATE CASCADE ON DELETE RESTRICT
);


CREATE TABLE tb_transaksi (
      transaksi_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
      transaksi_id_pemesanan INT (11) NOT NULL,
      transaksi_tanggal DATE NOT NULL,
      FOREIGN KEY (transaksi_id_pemesanan) REFERENCES tb_pemesanan (pemesanan_id) ON UPDATE CASCADE ON DELETE RESTRICT

);