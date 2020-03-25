<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Retail extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('RetailModel');
    }


    public function index()
    {
        $data['title'] = 'Retail | Adidas Web Admin';
        $data['datas'] = $this->RetailModel->get();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('retail/index');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Retail | Adidas Web Admin';

        $this->form_validation->set_rules('varNama', 'Nama Retail', 'required');
        $this->form_validation->set_rules('varAlamat', 'Alamat Retail', 'required');
        $this->form_validation->set_rules('varTelp', 'No. Telp Retail', 'required');

        if ($this->form_validation->run() == TRUE) {
            $this->RetailModel->store();
            redirect('retail');
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('retail/add');
            $this->load->view('template/footer');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Retail | Adidas Web Admin';
        $data['datas'] = $this->RetailModel->show($id);

        $this->form_validation->set_rules('varNama', 'Nama Retail', 'required');
        $this->form_validation->set_rules('varAlamat', 'Alamat Retail', 'required');
        $this->form_validation->set_rules('varTelp', 'No. Telp Retail', 'required');

        if ($this->form_validation->run() == TRUE) {
            $this->RetailModel->update($id);
            redirect('retail');
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('retail/edit');
            $this->load->view('template/footer');
        }
    }

    public function hapus($id)
    {
        $this->RetailModel->delete($id);
        redirect('retail');
    }
}
    
    /* End of file Retail.php */
