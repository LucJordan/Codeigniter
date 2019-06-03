<?php 
    class Test extends CI_Controller {

        public function index() {
            echo "This is default function.";
        }

        public function hello() {
            $this->load->model('User_model');
            $this->User_model->user_method();
            echo "<br>This is hello function.";
        }
}
?>