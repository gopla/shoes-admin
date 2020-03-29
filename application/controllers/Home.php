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
    $token = $this->session->flashdata('token');

    $data['title'] = "Dashboard | Adidas Web Admin";
    $data['dataTrans'] = $this->HomeModel->getTrans($token);
    $data['dataUser'] = $this->HomeModel->getUser($token);
    $data['dataSepatu'] = $this->HomeModel->getSepatu($token);
    $data['dataRetail'] = $this->HomeModel->getRetail($token);

    $this->session->set_flashdata('token', $token);

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('home/index');
    $this->load->view('template/footer');
  }

  public function login()
  {
    $data['title'] = "Login | Adidas Web Admin";

    $this->form_validation->set_rules('varEmail', 'Email', 'required');
    $this->form_validation->set_rules('varPassword', 'Email', 'required');

    if ($this->form_validation->run() == TRUE) {
      $data['login'] = $this->HomeModel->auth();
      $this->session->set_flashdata('token', $data['login']['token']);
      redirect('home');
    } else {
      $this->load->view('home/login', $data);
    }
  }

  public function logout()
  {
    $this->session->set_flashdata('token', '');
    redirect('home/login');
  }
}
    
    /* End of file Home.php */
