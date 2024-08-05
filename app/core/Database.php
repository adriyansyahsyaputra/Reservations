<?php

class Database {

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh; // Database handler
    private $stmt; // Statement

    public function __construct()
    {
        // Data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        // Untuk optimasi database
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch(PDOException $error) {
            die($error->getMessage());
        }
    }


    // Fungsi untuk menjalankan query
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    } 


    // Binding Data
    public function bind($param, $value, $type = null)
    {
        if( is_null($type) ) {
            switch( true ) {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }


    // Eksekusi
    public function execute()
    {
        $this->stmt->execute();
    }


    // Tentukan hasil setelah eksekusi : Jika ingin banyak
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // Jika data ingin satu
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Untuk menghitung ada berapa baris yang berubah di kolomnya
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

}