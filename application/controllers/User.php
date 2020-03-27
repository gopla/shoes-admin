<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('UserModel');
  }


  public function index()
  {
    $data['title'] = "User | Adidas Web Admin";
    $data['datas'] = $this->UserModel->get();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('user/index');
    $this->load->view('template/footer');
  }

  public function tambah()
  {
    $data['title'] = "User | Adidas Web Admin";
    $data['role'] = ['Admin', 'User'];

    $this->form_validation->set_rules('varNama', 'Nama', 'required');

    if ($this->form_validation->run() == TRUE) {
      $upload = $this->UserModel->upload();
      if ($upload['result'] == 'success') {
        $this->UserModel->store($upload);
        redirect('user');
      } else {
        echo $upload['error'];
      }
    } else {
      $this->load->view('template/header', $data);
      $this->load->view('template/sidebar');
      $this->load->view('user/add');
      $this->load->view('template/footer');
    }
  }

  public function edit($id)
  {
    $data['title'] = "User | Adidas Web Admin";
    $data['datas'] = $this->UserModel->show($id);
    $data['role'] = ['Admin', 'User'];

    $this->form_validation->set_rules('varNama', 'Nama', 'required');

    if ($this->form_validation->run() == TRUE) {
      $upload = $this->UserModel->upload();
      if ($upload['result'] == 'success') {
        $this->UserModel->update($id, $upload);
        redirect('user');
      } else {
        echo $upload['error'];
      }
    } else {
      $this->load->view('template/header', $data);
      $this->load->view('template/sidebar');
      $this->load->view('user/edit');
      $this->load->view('template/footer');
    }
  }

  public function hapus($id)
  {
    $this->UserModel->delete($id);
    redirect('user');
  }
}
    
    /* End of file Sepatu.php */
