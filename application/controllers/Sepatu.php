<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sepatu extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('SepatuModel');
  }


  public function index()
  {
    $token = $this->session->userdata('token');

    $data['title'] = "Sepatu | Adidas Web Admin";
    $data['datas'] = $this->SepatuModel->get($token);

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('sepatu/index');
    $this->load->view('template/footer');
  }

  public function tambah()
  {
    $data['title'] = "Sepatu | Adidas Web Admin";
    $data['tipe'] = ['Superstar', 'OZW', 'USBR Hongkong'];

    $this->form_validation->set_rules('varNama', 'Nama', 'required');
    $this->form_validation->set_rules('varTipe', 'Tipe', 'required');
    $this->form_validation->set_rules('varGender', 'Gender', 'required');
    $this->form_validation->set_rules('varDeskripsi', 'Deskripsi', 'required');
    $this->form_validation->set_rules('varUkuran', 'Ukuran', 'required');


    if ($this->form_validation->run() == TRUE) {
      $upload = $this->SepatuModel->upload();
      if ($upload['result'] == 'success') {
        $this->SepatuModel->store($upload);
        redirect('sepatu');
      } else {
        echo $upload['error'];
      }
    } else {
      $this->load->view('template/header', $data);
      $this->load->view('template/sidebar');
      $this->load->view('sepatu/add');
      $this->load->view('template/footer');
    }
  }

  public function edit($id)
  {
    $data['title'] = "Sepatu | Adidas Web Admin";
    $data['tipe'] = ['Superstar', 'OZW', 'USBR Hongkong'];
    $data['datas'] = $this->SepatuModel->show($id);

    $this->form_validation->set_rules('varNama', 'Nama', 'required');
    $this->form_validation->set_rules('varTipe', 'Tipe', 'required');
    $this->form_validation->set_rules('varGender', 'Gender', 'required');
    $this->form_validation->set_rules('varDeskripsi', 'Deskripsi', 'required');
    $this->form_validation->set_rules('varUkuran', 'Ukuran', 'required');

    if ($this->form_validation->run() == TRUE) {
      $upload = $this->SepatuModel->upload();
      if ($upload['result'] == 'success') {
        $this->SepatuModel->update($id, $upload);
        redirect('sepatu');
      } else {
        echo $upload['error'];
      }
    } else {
      $this->load->view('template/header', $data);
      $this->load->view('template/sidebar');
      $this->load->view('sepatu/edit');
      $this->load->view('template/footer');
    }
  }

  public function detail($id, $gbr)
  {
    $data['title'] = "Sepatu | Adidas Web Admin";
    $data['datas'] = $this->SepatuModel->show($id);
    $data['gambar'] = $gbr;

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('sepatu/show');
    $this->load->view('template/footer');
  }

  public function hapus($id)
  {
    $this->SepatuModel->delete($id);
    redirect('sepatu');
  }
}
    
    /* End of file Sepatu.php */
