<?php 

class About extends Controller{
    public function index($nama = 'Tio', $pekerjaan = 'Siswa', $umur = 18){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }

    public function club(){
        $data['judul'] = 'club';
        $data['all'] = $this->model("User_model")->all();
        $this->view('templates/header', $data);
        $this->view('about/club', $data);
        $this->view('templates/footer');
    }
    public function mhs(){
        $data['judul'] = 'Mhs';
        $data['mhs'] = $this->model("User_model")->transaksiMhs();
        $this->view('templates/header', $data);
        $this->view('about/mhs', $data);
        $this->view('templates/footer');
    }

    public function input(){
        $data['club'] = $this->model('User_model')->tambahClub($_POST);
        header('Location: ' . BASEURL . '/about/club');
    }

    public function delete($id){
        if($this->model('User_model')->deleteClub($id));
        redirect("/about/club");
    }

    public function edit($id){
        $data['judul'] = 'club';
        $data['clubId'] = $this->model("User_model")->getClubId($id);
        $this->view('templates/header', $data);
        $this->view('about/editClub', $data);
        $this->view('templates/footer');
    }

    public function editClub(){
        if($this->model('User_model')->editClubId($_POST));
        redirect("/about/club");
    }
}