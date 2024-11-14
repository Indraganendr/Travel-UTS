<?php

class Information_model {
    private $dbh;//Dtabase
    private $stmt;//Statement

    public function __construct()
    {
        //Data Source
        $dsn = 'mysql:host=localhost;dbname=utspariwisata';

        //Test Database
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllInformation()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM information'); //Mengambil semua data dari Database
        $this->stmt->execute(); 
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}