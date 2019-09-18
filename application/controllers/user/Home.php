<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
    
        public function index()
        {
            $this->load->view('user/template/header');
            $this->load->view('user/home/index');
            $this->load->view('user/template/footer');
            
        }
    
    }
    
    /* End of file Home.php */
    
?>