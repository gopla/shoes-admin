<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('book/index');
        $this->load->view('template/footer');
    }

}

/* End of file Book.php */
?>