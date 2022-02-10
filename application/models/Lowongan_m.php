<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan_m extends CI_Model
{

    public function get_all_lowongan()
    {
        $date = ('Y-m-d');
        $date2 = '2022-02-01';
        $this->db->select('*');
        $this->db->from('lowongan');
        // $this->db->where('batas_tanggal >=', $date);
        // $this->db->where('batas_tanggal <=', $date2);

        $this->db->order_by('id_lowongan', 'DESC');
        return  $this->db->get()->result();
    }

    public function cari_tanggal($tgl1, $tgl2)
    {
        $this->db->where('batas_tanggal >=', $tgl1);
        $this->db->where('batas_tanggal <=', $tgl2);
        return $this->db->get('lowongan')->result();
    }
    public function get_row_lowongan($id_lowongan)
    {
        $this->db->where('id_lowongan', $id_lowongan);

        return  $this->db->get('lowongan')->row();
    }
}/* End of file Lowongan_m.php */
