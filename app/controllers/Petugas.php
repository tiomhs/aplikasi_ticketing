<?php 

class Petugas extends Controller {
    public function index(){
        $data['judul'] = 'Petugas';
        $data['pesanan'] = $this->model("Petugas_model")->getAllPesanan();
        $this->view('templates/header', $data);
        $this->view('Petugas/index', $data);
        $this->view('templates/footer');
    }
    public function user(){
        $data['judul'] = 'Petugas';
        $data['petugas'] = $this->model('Petugas_model')->getAllPetugas();
        $this->view('templates/header', $data);
        $this->view('Petugas/user', $data);
        $this->view('templates/footer');
    }

    public function form_tambah_petugas(){
        $data['judul'] = 'Form Tambah Petugas';
        $this->view('templates/header', $data);
        $this->view('Petugas/form_petugas/form_tambah');
        $this->view('templates/footer');
    }

    public function add(){
        if($this->model("Petugas_model")->tambahPetugas($_POST) > 0){
            header("location: ".BASEURL."/petugas/user");
        }
    }
}