<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class HomeModel extends CI_Model
{

  private $_client;


  public function __construct()
  {
    parent::__construct();
    $this->_client = new Client([
      'base_uri' => 'http://sepatu.gopla.xyz/'
      // 'base_uri' => 'http://localhost:3000/'
    ]);
  }

  public function getTrans($token)
  {
    try {
      $res = $this->_client->request('GET', 'dashboard/trans', [
        'headers' => [
          'authorization' => "bearerHeader " . $token
        ]
      ]);
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }

  public function getSepatu($token)
  {
    try {
      $res = $this->_client->request('GET', 'dashboard/sepatu', [
        'headers' => [
          'authorization' => "bearerHeader " . $token
        ]
      ]);
      // var_dump(json_decode($res->getBody()->getContents(), true));
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }

  public function getUser($token)
  {
    try {
      $res = $this->_client->request('GET', 'dashboard/user', [
        'headers' => [
          'authorization' => "bearerHeader " . $token
        ]
      ]);
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }

  public function getRetail($token)
  {
    try {
      $res = $this->_client->request('GET', 'dashboard/retail', [
        'headers' => [
          'authorization' => "bearerHeader " . $token
        ]
      ]);
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }

  public function auth()
  {
    $data = [
      "email" => htmlspecialchars(
        $this->input->post('varEmail')
      ),
      "password" => htmlspecialchars(
        $this->input->post('varPassword')
      )
    ];
    try {
      $res = $this->_client->request('POST', 'user/login', [
        "json" => $data
      ]);
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }
}
    
    /* End of file HomeModel.php */
