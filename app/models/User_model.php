<?php 

class User_model{
    private $nama = 'Tio';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllPenumpang(){
        $query = "SELECT * FROM penumpang";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function loginUser($data){
        $this->db->query("SELECT * FROM penumpang WHERE username=:username AND password=:password");
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->singleSet();
    }

    public function loginPetugas($data){
        $this->db->query("SELECT * FROM petugas WHERE username=:username AND password=:password");
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->singleSet();
    }

    public function register($data){
        $this->db->query("INSERT INTO penumpang VALUES(null, :username, :password, :nama_penumpang, :alamat_penumpang, :tanggal_lahir, :jenis_kelamin, :telefone)");
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nama_penumpang', $data['nama_penumpang']);
        $this->db->bind('alamat_penumpang', $data['alamat_penumpang']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('telefone', $data['telefone']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus_penumpang($id){
        $query = "DELETE from penumpang WHERE id_penumpang=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahClub($data){
        $query = "call insertDataClub(null,:club)";
        $this->db->query($query);
        // $this->db->bind('id', $data['id']);
        $this->db->bind('club', $data['club']);
        $this->db->execute();
        return $this->db->singleSet();
    }

    public function all(){
        $this->db->query('SELECT * FROM club');
        return $this->db->resultSet();
    }

}