<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Service extends CI_Controller {
    
        public function index()
        {
            $this->load->view('template/header');
            $this->load->view('service/index');
            $this->load->view('template/footer');
        }
    
    }
    
    /* End of file Service.php */
    
?>