<?php

class Login extends Controller {
    // public function __construct() {
        
    //     if (isset($_SESSION['user'])) {

    //     }
    // }
    
    public function index() {
        $data["judul"] = "Login";
        $this->view("templates/header", $data);
        $this->view("auth/login", $data);
        $this->view("templates/footer");
     }

     public function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo $username . '<br>' . $password;
     }
     public function prosesLogin() {
        if ($this->model('User_model')->getUserByEmail($_POST['email'])) {
          $result = $this->model('User_model')->getUserByEmail($_POST['email']);
          if (md5($_POST['password'] . SALT == $result['password'])) {
            $_SESSION['user'] = [
                'username' => $result['username'],
                'email' => $result['email']
            ];
            Flasher::setFlash('Selamat Datang', "{$result['username']}", 'success');
                header("Location: " . BASE_URL . "/user");
                exit;
            } else{
                Flasher::setFlash('Akun Tidak', 'terdaftar', 'danger');
                header("Location: " . BASE_URL . "/login");
                exit;
            }
          }  
        }
}