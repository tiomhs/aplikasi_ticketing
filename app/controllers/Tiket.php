<?php 

class Tiket extends Controller {
    public function index(){
        $data['judul'] = 'Tiket';
        $data['rute'] = $this->model('Tiket_model')->getAllRute();
        $this->view('templates/header', $data);
        $this->view('Tiket/index',$data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail';
        $data['detail_tiket'] = $this->model('Tiket_model')->detailRute($id);
        $this->view('templates/header', $data);
        $this->view('Tiket/detail',$data);
        $this->view('templates/footer');
    }

    public function fPemesanan(){
        $data['judul'] = 'Pemesanan';
        $data['tujuan'] = $this->model("Tiket_model")->getAllRute();
        $this->view('templates/header', $data);
        $this->view('Tiket/pemesanan',$data);
        $this->view('templates/footer');
    }

    public function pemesanan(){
        var_dump($_POST);
    }
}