<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class RetailModel extends CI_Model
{

    private $_client;


    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'http://sepatu.gopla.xyz/'
        ]);
    }


    public function get()
    {
        try {
            $res = $this->_client->request('GET', 'retail');
            return json_decode($res->getBody()->getContents(), true);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            echo $e->getResponse()->getBody()->getContents();
        }
    }

    public function show($id)
    {
        try {
            $res = $this->_client->request('GET', 'retail/' . $id . ')');
            return json_decode($res->getBody()->getContents(), true);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            echo $e->getResponse()->getBody()->getContents();
        }
    }

    public function store()
    {
        $data = [
            "nama" => $this->input->post('varNama'),
            "lokasi" => $this->input->post('varAlamat'),
            "telp" => $this->input->post('varTelp')
        ];
        try {
            $res = $this->_client->request('POST', 'retail', [
                "json" => $data
            ]);
            return json_decode($res->getBody()->getContents(), true);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            echo $e->getResponse()->getBody()->getContents();
        }
    }

    public function update($id)
    {
        $data = [
            "nama" => $this->input->post('varNama'),
            "lokasi" => $this->input->post('varAlamat'),
            "telp" => $this->input->post('varTelp')
        ];
        try {
            $res = $this->_client->request('PUT', 'retail/' . $id, [
                "json" => $data
            ]);
            return json_decode($res->getBody()->getContents(), true);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            echo $e->getResponse()->getBody()->getContents();
        }
    }

    public function delete($id)
    {
        try {
            $res = $this->_client->request('DELETE', 'retail/' . $id . ')');
            return json_decode($res->getBody()->getContents(), true);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            echo $e->getResponse()->getBody()->getContents();
        }
    }
}
    
    /* End of file RetailModel.php */
