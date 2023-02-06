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

    public function tambahType($data){
        $query = "INSERT INTO type_transportasi VALUES(null, :nama_type, :keterangan)";
        $this->db->query($query);
        // $this->db->bind('kode', $data['kode']);
        $this->db->bind('nama_type', $data['nama_type']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusType($id){
        $query = "DELETE FROM type_transportasi WHERE id_type_transportasi=:id ;";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}