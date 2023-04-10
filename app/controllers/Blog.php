<?php
    // class Blog extends Controller {
    //     public function index () {
    //         $data["judul"] = "Blog";
    //         $data["blog"] = 
    //         $this->model("Blog_model")->getAllBlog();
    //         $this->view("templates/header", $data);
    //         $this->view("blog/index", $data);
    //         $this->view("templates/footer");
    //     }
    // }
    class Blog extends Controller {
        public function index() {
            $data["judul"] = "Blog";
            $data["blog"] = $this->model("Blog_model")->getAllBlog();
            $this->view("templates/header", $data);
            $this->view("blog/index", $data);
            $this->view("templates/footer");
        }
        public function detail($id){
            $data['judul'] = "Detail Blog";
            $data['blog'] = $this->model("Blog_model")->getBlogById($id);
            $this->view('templates/header', $data);
            $this->view('blog/detail', $data);
            $this->view('templates/footer');
        }

        public function tambah() {
            var_dump($_POST);
            if($this->model("Blog_model")->tambahdataBlog($_POST) > 0){
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header("Location: " . BASE_URL . "/blog");
                exit;
            } else{
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header("Location: " . BASE_URL . "/blog");
                exit;
            }
        }

        public function hapus($id) {
            var_dump($_POST);
            if($this->model("Blog_model")->hapusdataBlog($id) > 0){
                Flasher::setFlash('berhasil', 'dihapus', 'success');
                header("Location: " . BASE_URL . "/blog");
                exit;
            } else{
                Flasher::setFlash('gagal', 'dihapus', 'danger');
                header("Location: " . BASE_URL . "/blog");
                exit;
            }
        }

        public function getubah() {
            echo json_encode ($this->model('Blog_model')->getBlogById($_POST['id']));
        }

        public function ubah() {
            var_dump($_POST);
            if($this->model("Blog_model")->ubahdataBlog($_POST) > 0){
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header("Location: " . BASE_URL . "/blog");
                exit;
            } else{
                Flasher::setFlash('gagal', 'diubah', 'danger');
                header("Location: " . BASE_URL . "/blog");
                exit;
            }
        }

        public function cari() {
            $data["judul"] = "Blog";
            $data["blog"] = $this->model("Blog_model")->cariDataBlog();
            $this->view("templates/header", $data);
            $this->view("blog/index", $data);
            $this->view("templates/footer");
        }

    }
?>