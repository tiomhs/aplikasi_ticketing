<?php 

class Tiket_model{
     private $db;
    
     public function __construct()
     {
        $this->db = new Database;
     }

     public function getAllRute()
     {
        $query = "SELECT * FROM rute";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
     }

     public function detailRute($id){
         // $query = "select rute.id_rute, rute.tujuan, rute.rute_awal, rute.rute_akhir, rute.harga, rute.id_transportasi, transportasi.kode, transportasi.jumlah_kursi, transportasi.keterangan from rute left join transportasi on rute.id_transportasi = transportasi.id_transportasi WHERE rute.id_rute = :id";
         $query = "SELECT * FROM rute INNER join transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi WHERE rute.id_rute = :id";
         $this->db->query($query);
         $this->db->bind('id',$id);
         return $this->db->singleSet();
     }

     public function tambahRute($data){
         $query = "INSERT INTO rute VALUES (null, :tujuan, :rute_awal, :rute_akhir, :harga, :id_transportasi)";
         $this->db->query($query);
         $this->db->bind('tujuan', $data['tujuan']);
         $this->db->bind('rute_awal', $data['rute_awal']);
         $this->db->bind('rute_akhir', $data['rute_akhir']);
         $this->db->bind('harga', $data['harga']);
         $this->db->bind('id_transportasi', $data['id_transportasi']);
         $this->db->execute();
         return $this->db->rowCount();
     }

     public function hapusRute($id){
         $query = "DELETE FROM rute WHERE id_rute=:id";
         $this->db->query($query);
         $this->db->bind('id',$id);
         $this->db->execute();
         return $this->db->rowCount();
     }
}