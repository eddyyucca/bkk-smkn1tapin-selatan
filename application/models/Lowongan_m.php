<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan_m extends CI_Model
{

    public function get_all_lowongan()
    {
        $date = ('Y-m-d');
        $this->db->where('batas_tanggal <=', $date);
        $this->db->order_by('id_lowongan', 'DESC');
        return  $this->db->get('lowongan')->result();
    }
    public function get_row_lowongan($id_lowongan)
    {
        $this->db->where('id_lowongan', $id_lowongan);

        return  $this->db->get('lowongan')->row();
    }
}/* End of file Lowongan_m.php */
