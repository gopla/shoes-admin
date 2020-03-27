<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class UserModel extends CI_Model
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


  public function get()
  {
    try {
      $res = $this->_client->request('GET', 'user');
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }

  public function show($id)
  {
    try {
      $res = $this->_client->request('GET', 'user/' . $id . ')');
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
        'name' => "email",
        'contents' => $this->input->post('varEmail')
      ],
      [
        'name' => "password",
        'contents' => $this->input->post('varPassword')
      ],
      [
        'name' => "alamat",
        'contents' => $this->input->post('varAlamat')
      ],
      [
        'name' => "telp",
        'contents' => $this->input->post('varTelp')
      ],
      [
        'name' => "role",
        'contents' => $this->input->post('varRole')
      ],
      [
        'name' => "foto",
        'contents' => fopen('uploads/user/' . $upload['file']['file_name'], 'r')
      ]
    ];
    try {
      $res = $this->_client->request('POST', 'user', [
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
        'name' => "email",
        'contents' => $this->input->post('varEmail')
      ],
      [
        'name' => "password",
        'contents' => $this->input->post('varPassword')
      ],
      [
        'name' => "alamat",
        'contents' => $this->input->post('varAlamat')
      ],
      [
        'name' => "telp",
        'contents' => $this->input->post('varTelp')
      ],
      [
        'name' => "role",
        'contents' => $this->input->post('varRole')
      ],
      [
        'name' => "foto",
        'contents' => fopen('uploads/user/' . $upload['file']['file_name'], 'r')
      ]
    ];
    try {
      $res = $this->_client->request('PUT', 'user/' . $id, [
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
      $res = $this->_client->request('DELETE', 'user/' . $id . ')');
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }

  public function upload()
  {
    $config['upload_path'] = './uploads/user/';
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
    
    /* End of file UserModel.php */
