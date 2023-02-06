<?php 

class Tiket extends Controller {
    public function index(){
        $data['judul'] = 'Tiket';
        $this->view('templates/header', $data);
        $this->view('transportasi/index',$data);
        $this->view('templates/footer');
    }
}