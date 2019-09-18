<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class HomeModel extends CI_Model {
    
        public function index(){
            return $this->db->get('pemesanan')->num_rows();
        }
    
    }
    
    /* End of file HomeModel.php */
    
?>