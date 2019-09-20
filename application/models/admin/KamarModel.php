<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class KamarModel extends CI_Model {
        
        public function getAllKamar()
        {
            return $this->db->get('kamar')->result_array();
        }

        public function showKamar($no)
        {
            return $this->db->get_where('kamar', array('no_kamar', $no))->result_array();
        }

        public function storeKamar(){
            $data = array(
                "no_kamar" => $this->input->post('varNoKamar', true),
                "tipe" => $this->input->post('varTipe', true),
                "jumlah_kasur" => $this->input->post('varJmlKasur', true)
            );
            $this->db->insert('kamar', $data);
            redirect('kamar');
            
        }
    }
    
    /* End of file KamarModel.php */
    
?>