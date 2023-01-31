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
}