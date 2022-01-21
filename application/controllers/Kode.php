<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kode extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('admin/index');
        $this->load->view('template/footer');
    }
}

/* End of file Kode.php */
