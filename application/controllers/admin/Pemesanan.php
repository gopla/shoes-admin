<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Pemesanan extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/PemesananModel');
        }
        
    
        public function index()
        {
            $data['title'] = "Data Pemesanan | BelleCrown";
            $data['kumpulanPemesanan'] = $this->PemesananModel->getAllPemesanan();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/pemesanan/index');
            $this->load->view('admin/template/footer');  
        }
    
    }
    
    /* End of file Pemesanan.php */
    
?>