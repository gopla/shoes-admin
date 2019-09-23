<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/KamarModel');
        
    }
    

    public function index()
    {
        $data['title'] = 'Data Kamar | BelleCrown';
        $data['kumpulanKamar'] = $this->KamarModel->getAllKamar();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/kamar/index');
        $this->load->view('admin/template/footer');
        
    }

}

/* End of file Kamar.php */
?>