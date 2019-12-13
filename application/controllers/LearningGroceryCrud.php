<?php 
    class LearningGroceryCrud extends CI_Controller {  

        public function index() { 
            $this->load->view('test');  
        } 

        public function hello() { 
            echo "This is hello function.234346456456"; 
        }

        public function fishes() { 
            echo "Find a Nemo"; 
        }
    } 
?>