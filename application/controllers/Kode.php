<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kode extends CI_Controller
{

    public function x($kode = null)
    {

        // $kode = $this->input->post('kode');
        if ($kode == null) {
            echo 'Data CV Kosong';
        } else {
            $data['data'] = (base64_decode($kode));
            $this->load->view('pdf/pdf', $data);
        }
    }
}

/* End of file Kode.php */
