<?php

class Galery_model {

    private $tableGalery = 'galery';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    
    // Mengambil data dari tabel galery
    public function getGalery()
    {
        $this->db->query('SELECT * FROM ' . $this->tableGalery);
        return $this->db->resultSet();
    }


    
    // Fungsi untuk menambah data galery
    public function tambahDataGalery($data)
    {
        $query = "INSERT INTO galery VALUES
                ('', :nama, :youtube, :gambar)
                ";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('youtube', $data['youtube']);
        $this->db->bind('gambar', $data['gambar']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Fungsi untuk menghapus data wisata
    public function hapusDataGalery($id)
    {
        $query = "DELETE FROM galery WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

}