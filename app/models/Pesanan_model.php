<?php 

class Pesanan_model{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPesanan(){
        $query = "SELECT * FROM pemesanan";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
}