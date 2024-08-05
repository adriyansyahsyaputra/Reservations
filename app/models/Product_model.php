<?php

class Product_model {

  private $table = 'paket_wisata';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

    public function getProductWisata()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

}