<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan_m extends CI_Model
{
    public function get_all_jurusan()
    {
        $this->db->order_by('id_jurusan', 'DESC');
        return $this->db->get('jurusan')->result();
    }

    public function get_row_jurusan($id_jurusan)
    {
        $this->db->where('id_jurusan', $id_jurusan);
        return $this->db->get('jurusan')->row();
    }
}

/* End of file jurusan_m.php */
