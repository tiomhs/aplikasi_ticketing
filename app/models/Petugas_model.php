<?php 

class Petugas_model {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPetugas(){
        $query = "SELECT * FROM petugas";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function tambahPetugas($data){
        $query = "INSERT INTO petugas Values (null, :username, :password, :nama_petugas, 2)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nama_petugas', $data['nama_petugas']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    
}