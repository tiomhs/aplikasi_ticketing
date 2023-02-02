<?php 

class Petugas extends Controller {
    public function index(){
        $data['judul'] = 'Petugas';
        $this->view('templates/header', $data);
        $this->view('Petugas/index', $data);
        $this->view('templates/footer');
    }
    public function user(){
        $data['judul'] = 'Petugas';
        $data['petugas'] = $this->model('Petugas_model')->getAllPetugas();
        $data['penumpang'] = $this->model('User_model')->getAllPenumpang();
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

    public function delete($id){
        if($this->model("Petugas_model")->hapusPetugas($id) > 0){
            header("location: ".BASEURL."/petugas/user");
        }
    }

    public function form_tambah_penumpang(){
        $data['judul'] = 'Form Tambah Penumpang';
        $this->view('templates/header', $data);
        $this->view('Petugas/form_petugas/form_tambah_penumpang');
        $this->view('templates/footer');
    }

    public function add_penumpang(){
        if($this->model('User_model')->register($_POST) > 0){
            header("location:".BASEURL."/petugas/user");
        }
    }

    public function delete_penumpang($id){
        if($this->model("User_model")->hapusPenumpang($id) > 0){
            header("location: ".BASEURL."/petugas/user");
        }
    }

    public function rute(){
        $data['judul'] = 'rute';
        $data['rute'] = $this->model('Tiket_model')->getAllRute();
        $this->view('templates/header', $data);
        $this->view('Petugas/rute',$data);
        $this->view('templates/footer');
    }

    public function form_tambah_rute(){
        $data['judul'] = 'Form Tambah Rute';
        $data['transportasi'] = $this->model('Transportasi_model')->getAllTransportasi();
        $this->view('templates/header', $data);
        $this->view('Petugas/form_petugas/form_tambah_rute',$data);
        $this->view('templates/footer');
    }

    public function add_rute(){
        if($this->model('Tiket_model')->tambahRute($_POST) > 0){
            header("location:".BASEURL."/petugas/rute");
        }
    }

    public function delete_rute($id){
        if($this->model('Tiket_model')->hapusRute($id) > 0){
            header("location:".BASEURL."/petugas/rute");
        }
    }

}