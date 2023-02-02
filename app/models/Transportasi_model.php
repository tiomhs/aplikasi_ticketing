<?php 

class Transportasi_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTransportasi(){
        $query = "SELECT * FROM transportasi";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
}