<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    public function index()
    {
        $this->load->view('user/template/header');
        $this->load->view('user/book/index');
        $this->load->view('user/template/footer');
    }

}

/* End of file Book.php */
?>