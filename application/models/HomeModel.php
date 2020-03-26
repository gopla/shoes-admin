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
      'base_uri' => 'http://sepatu.gopla.xyz/dashboard/'
    ]);
  }


  public function getTrans()
  {
    try {
      $res = $this->_client->request('GET', 'trans');
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }

  public function getSepatu()
  {
    try {
      $res = $this->_client->request('GET', 'sepatu');
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }

  public function getUser()
  {
    try {
      $res = $this->_client->request('GET', 'user');
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }

  public function getRetail()
  {
    try {
      $res = $this->_client->request('GET', 'retail');
      return json_decode($res->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo $e->getResponse()->getBody()->getContents();
    }
  }
}
    
    /* End of file HomeModel.php */
