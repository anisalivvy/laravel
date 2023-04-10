<?php

class Register extends Controller {
    public function index() {
        $data["judul"] = "Register";
        $this->view("templates/header", $data);
        $this->view("auth/register");
        $this->view("templates/footer");
     }

     public function registerAdd() {
        if($_POST['password'] == $_POST['confirm_password']) {
            if($this->model('User_model')->getUserByEmail($_POST['email'])) {
                Flasher::setFlash('Akun sudah', 'terdaftar', 'success');
                header('Location; ' . BASE_URL . '/register');
                exit;
            }else{
                Flasher::setFlash('Akun gagal', 'terdaftar', 'danger');
                header("Location: " . BASE_URL . "/register");
                exit;
            }
        }
     }
}