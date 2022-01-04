<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan_m extends CI_Model
{

    public function get_all_lowongan()
    {
        $this->db->order_by('id_lowongan', 'DESC');
        return  $this->db->get('lowongan');
    }
}/* End of file Lowongan_m.php */
