<?php
    
    class Controller {
        public function view($view, $data = []) {
          // session_start();
          // if(!isset($_SESSION['username'])) {
          //   require_once "../app/views/auth/login.php";
          // } else {
          require_once "../app/views/$view.php";
        //   }
        }
        public function model ($model) {
            require_once "../app/model/$model.php";
            return new $model;
        }
      }
?>

   
    