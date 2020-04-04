<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class SepatuModel extends CI_Model
{

  private $_client;


  public function __construct()
  {
    parent::__construct();
    $this->_client = new Client([
      'base_uri' => 'http://sepatu.gopla.xyz/'
      // 'base_uri' => 'http://localhost:3000'
    ]);
  }


  public function get($token)
  {
    try {
      $res = $this->_client->request('GET', 'sepatu', [
        'headers' => [
          'authorization' => "bearerHeader " . $token
        ]
      ]);
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }

  public function show($id)
  {
    try {
      $res = $this->_client->request('GET', 'sepatu/' . $id . ')');
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }

  public function store($upload)
  {
    $data = [
      [
        'name' => "nama",
        'contents' => $this->input->post('varNama')
      ],
      [
        'name' => "tipe",
        'contents' => $this->input->post('varTipe')
      ],
      [
        'name' => "gender",
        'contents' => $this->input->post('varGender')
      ],
      [
        'name' => "deskripsi",
        'contents' => $this->input->post('varDeskripsi')
      ],
      [
        'name' => "ukuran",
        'contents' => $this->input->post('varUkuran')
      ],
      [
        'name' => "harga",
        'contents' => $this->input->post('varHarga')
      ],
      [
        'name' => "stok",
        'contents' => $this->input->post('varStok')
      ],
      [
        'name' => "gambar",
        'contents' => fopen('uploads/sepatu/' . $upload['file']['file_name'], 'r')
      ]
    ];
    try {
      $res = $this->_client->request('POST', 'sepatu', [
        "multipart" => $data
      ]);
      $this->_deleteImage($upload['file']['file_name']);
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }

  public function update($id, $upload)
  {
    $data = [
      [
        'name' => "nama",
        'contents' => $this->input->post('varNama')
      ],
      [
        'name' => "tipe",
        'contents' => $this->input->post('varTipe')
      ],
      [
        'name' => "gender",
        'contents' => $this->input->post('varGender')
      ],
      [
        'name' => "deskripsi",
        'contents' => $this->input->post('varDeskripsi')
      ],
      [
        'name' => "ukuran",
        'contents' => $this->input->post('varUkuran')
      ],
      [
        'name' => "harga",
        'contents' => $this->input->post('varHarga')
      ],
      [
        'name' => "stok",
        'contents' => $this->input->post('varStok')
      ],
      [
        'name' => "gambar",
        'contents' => fopen('uploads/sepatu/' . $upload['file']['file_name'], 'r')
      ]
    ];
    try {
      $res = $this->_client->request('PUT', 'sepatu/' . $id, [
        "multipart" => $data
      ]);
      $this->_deleteImage($upload['file']['file_name']);
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }

  public function delete($id)
  {
    try {
      $res = $this->_client->request('DELETE', 'sepatu/' . $id . ')');
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }

  public function upload()
  {
    $config['upload_path'] = './uploads/sepatu/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('varImage')) {
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    } else {
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

  private function _deleteImage($name)
  {
    unlink(FCPATH . "./uploads/sepatu/" . $name);
  }
}
    
    /* End of file SepatuModel.php */
