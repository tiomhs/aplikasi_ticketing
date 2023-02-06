<?php 

class Type_Transportasi_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllType(){
        $query = "SELECT * FROM type_transportasi";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
}