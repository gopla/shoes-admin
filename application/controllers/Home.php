<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('HomeModel');
  }


  public function index()
  {
    $data['title'] = "Dashboard | Adidas Web Admin";
    $data['dataTrans'] = $this->HomeModel->getTrans();
    $data['dataUser'] = $this->HomeModel->getUser();
    $data['dataSepatu'] = $this->HomeModel->getSepatu();
    $data['dataRetail'] = $this->HomeModel->getRetail();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('home/index');
    $this->load->view('template/footer');
  }
}
    
    /* End of file Home.php */
