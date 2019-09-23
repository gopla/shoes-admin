<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class PemesananModel extends CI_Model {
    
        public function getAllPemesanan(){
            return $this->db->get('pemesanan')->result_array();           
        }
    
    }
    
    /* End of file PemesananModel.php */
    
?>