<?php
//     class Home {
//     public function index() {
//         echo "Home/index";
//     }
// }

//     class Home extends Controller {
        
//     public function index() {
//         $data['judul'] = "Home";
//         $this->view('home/index');
//     }
// }

class Home extends Controller {
    public function index() {
        //echo "Home/index";
        $data["judul"] = "Home";
        // $data["nama"] = $this->model("User_model")->getUser();
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
}
?>

