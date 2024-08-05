<?php

class Product_model
{

    private $tableWisata = 'paket_wisata';
    private $tableGalery = 'galery';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Mengambil data dari tabel paket_wisata
    public function getProductWisata()
    {
        $this->db->query('SELECT * FROM ' . $this->tableWisata);
        return $this->db->resultSet();
    }

    // Mengambil data dari tabel galery
    public function getGalery()
    {
        $this->db->query('SELECT * FROM ' . $this->tableGalery);
        return $this->db->resultSet();
    }

    // Fungsi untuk menambah data wisata
    public function tambahDataWisata($data)
    {
        $query = "INSERT INTO paket_wisata VALUES
                ('', :nama, :deskripsi, :gambar)
                ";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('gambar', $data['gambar']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
