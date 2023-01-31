<?php 

class Auth extends Controller{
    public function index(){
        $data['judul'] = 'login';
        $this->view('auth/index', $data);
    }

    public function login(){
        if($this->model("User_model")->loginUser($_POST)){
            $user = $this->model("User_model")->loginUser($_POST);
            $_SESSION['login'] = 'true';
            $_SESSION['id_penumpang'] = $user['id_penumpang'];
            header('location:'.BASEURL.'/home/index');
            exit;
        }elseif ($this->model("User_model")->loginPetugas($_POST)) {
            $user = $this->model("User_model")->loginPetugas($_POST);
            $_SESSION['login'] = 'true';
            $_SESSION['id_petugas'] = $user['id_petugas'];
            header('location:'.BASEURL.'/petugas/index');
            exit;
        }
        else{
            echo "<script>alert('MAAF LOGIN GAGAL');</script>";
            header('location:'.BASEURL.'/auth/index');
            exit;
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header('Location: '.BASEURL.'/auth/index');
    }

    public function regisForm(){
        $data['judul'] = 'Registrasi';
        $this->view('auth/regis', $data);
    }

    public function register(){
        if($this->model('User_model')->register($_POST) > 0){
            header("location:".BASEURL."/auth/index");
        }
    }
}