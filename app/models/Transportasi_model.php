<?php 

class Transportasi_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTransportation(){
        $query = "SELECT * FROM transportasi";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function tambahTransportasi($data){
        $query = "INSERT INTO transportasi VALUES(null, null, :jumlah_kursi, :keterangan, :id_type_transportasi)";
        $this->db->query($query);
        // $this->db->bind('kode', $data['kode']);
        $this->db->bind('jumlah_kursi', $data['jumlah_kursi']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('id_type_transportasi', $data['id_type_transportasi']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusTransportasi($id){
        $query = "DELETE FROM transportasi WHERE id_transportasi=:id ;";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}