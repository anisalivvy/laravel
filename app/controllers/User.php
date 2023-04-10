<?php
// class User {
//     public function index() {
//         echo "User/index";
//     }
//     public function profile($nama = "", $pekerjaan = "") {
//         echo "Salam kenal saya $nama, saya seorang $pekerjaan";
//     }
// }

// class User extends Controller {
//     public function index()  {
//         $this->view("user/index");
//     }
//     public function profile($nama = "Linux", $pekerjaan = "Devs") {
//         $data["nama"] = $nama;
//         $data["pekerjaan"] = $pekerjaan;
//         $this->view("user/profile", $data);
//     }
// }

class User extends Controller {
    public function index() {
       $data["judul"] = "User";
       $data["user"] = $this->model('User_model')->getAllUser();
      
       $this->view("templates/header", $data);
       $this->view("user/index", $data);
       $this->view("templates/footer");
    }
    
    public function profile($nama = "Linux", $pekerjaan = "Pelajar") {
       $data["judul"] = "User";
       $data["nama"] = $nama;
       $data["pekerjaan"] = $pekerjaan;
       $this->view("templates/header", $data);
       $this->view("user/profile", $data);
       $this->view("templates/footer");
    }

    public function detail($id){
      $data['nama'] = "Detail User";
      $data['user'] = $this->model("User_model")->getUserById($id);
      $this->view('templates/header', $data);
      $this->view('user/detail', $data);
      $this->view('templates/footer');
  }

  public function tambah() {
   var_dump($_POST);
   if($this->model("User_model")->tambahdataUser($_POST) > 0){
       Flasher::setFlash('berhasil', 'ditambahkan', 'success');
       header("Location: " . BASE_URL . "/User");
       exit;
   } else{
       Flasher::setFlash('gagal', 'ditambahkan', 'danger');
       header("Location: " . BASE_URL . "/User");
       exit;
   }
}

   public function hapus($id) {
   var_dump($_POST);
   if($this->model("User_model")->hapusdataUser($id) > 0){
       Flasher::setFlash('berhasil', 'dihapus', 'success');
       header("Location: " . BASE_URL . "/User");
       exit;
   } else{
       Flasher::setFlash('gagal', 'dihapus', 'danger');
       header("Location: " . BASE_URL . "/User");
       exit;
   }
}

   public function getubah() {
   echo json_encode ($this->model('User_model')->getUserById($_POST['id']));
}

public function ubah() {
   var_dump($_POST);
   if($this->model("User_model")->ubahdataUser($_POST) > 0){
       Flasher::setFlash('berhasil', 'diubah', 'success');
       header("Location: " . BASE_URL . "/user");
       exit;
   } else{
       Flasher::setFlash('gagal', 'diubah', 'danger');
       header("Location: " . BASE_URL . "/user");
       exit;
   }
}

public function cari() {
   $data["judul"] = "User";
   $data["user"] = $this->model("User_model")->cariDataUser();
   $this->view("templates/header", $data);
   $this->view("user/index", $data);
   $this->view("templates/footer");
}

}
