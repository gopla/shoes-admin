<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            // $this->load->model('admin/HomeModel');
        }
        
    
        public function index()
        {
            // $data['jmlPesanan'] = $this->HomeModel->index();
            $data['title'] = "Dashboard | BelleCrown Admin Panel";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('home/index');
            $this->load->view('template/footer');   
        }
    
    }
    
    /* End of file Home.php */
    
?>