<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Trans extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('TransModel');
  }


  public function index()
  {
    $token = $this->session->userdata('token');

    $data['title'] = 'Transaksi | Adidas Web Admin';
    $data['datas'] = $this->TransModel->get($token);

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('trans/index');
    $this->load->view('template/footer');
  }

  public function show($id)
  {
    $token = $this->session->userdata('token');

    $data['title'] = 'Transaksi Detail | Adidas Web Admin';
    $data['datas'] = $this->TransModel->show($id, $token);

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('trans/show');
    $this->load->view('template/footer');
  }

  public function checkout($id)
  {
    $token = $this->session->userdata('token');
    $this->TransModel->update($id, $token);
    redirect('trans');
  }
}
    
    /* End of file Trans.php */
