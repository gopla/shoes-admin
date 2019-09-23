<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Service extends CI_Controller {
    
        public function index()
        {
            $this->load->view('user/template/header');
            $this->load->view('user/service/index');
            $this->load->view('user/template/footer');
        }
    
    }
    
    /* End of file Service.php */
    
?>