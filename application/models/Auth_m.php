<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{
    public function login($telpon, $password)
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->join('alumni', 'alumni.telpon = akun.telpon');
        $this->db->where('akun.telpon', $telpon);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }
}

/* End of file Auth_m.php */
