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
        if($this->model("User_model")->hapus_penumpang($id) > 0){
            header("location: ".BASEURL."/petugas/user");
        }
    }

}