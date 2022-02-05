<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni_m extends CI_Model
{
    public function jumlah_alumni()
    {
        $query = $this->db->get('alumni');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function jumlah_lowongan()
    {

        $query = $this->db->get('lowongan');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function cek($id_lowongan, $id_alumni)
    {
        $this->db->where('id_lowongan', $id_lowongan);
        $this->db->where('id_alumni', $id_alumni);
        return $this->db->get('lamaran')->row();
    }

    public function jumlah_absen_bulan($bulan)
    {
        $this->db->select('*');
        $this->db->from('absen');
        $this->db->where('MONTH(absen.tanggal)', $bulan);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_bidang()
    {
        $query = $this->db->get('bidang');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function get_all_alumni()
    {
        $this->db->join('akun', 'akun.telpon = alumni.telpon');
        $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.jurusan_smk');
        // $this->db->join('bidang', 'bidang.id_bidang = alumni.bidang');
        $this->db->order_by('id_alumni', 'DESC');
        return $this->db->get('alumni')->result();
    }
    public function get_all_alumni_tahun_lulus($cari_tahun_lulus)
    {
        $this->db->join('akun', 'akun.telpon = alumni.telpon');
        $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.jurusan_smk');
        $this->db->where('tahun_lulus', $cari_tahun_lulus);

        $this->db->order_by('id_alumni', 'DESC');
        return $this->db->get('alumni')->result();
    }
    public function get_status($id_alumni)
    {

        // $this->db->select('*');
        // $this->db->from('lamaran');

        // // $this->db->join('alumni', 'alumni.id_alumni = lamaran.id_alumni');
        // $this->db->join('lamaran', 'lamaran.id_lowongan = lamaran.id_lowongan');
        $this->db->join('lowongan', 'lowongan.id_lowongan = lamaran.id_lowongan');
        // // $this->db->join('akun', 'akun.telpon = alumni.telpon');
        // // $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.jurusan_smk');
        // $this->db->order_by('lowongan.id_lowongan', 'DESC');
        $this->db->where('id_alumni', $id_alumni);
        return $this->db->get('lamaran')->result();
    }
    public function get_pengajuan()
    {
        $this->db->select('*');
        $this->db->from('lamaran');
        $this->db->join('alumni', 'alumni.id_alumni = lamaran.id_alumni');
        $this->db->join('lowongan', 'lowongan.id_lowongan = lamaran.id_lowongan');

        $this->db->where('lamaran.status_lamaran', "1");
        $this->db->order_by('lowongan.id_lowongan', 'DESC');
        return $this->db->get()->result();
    }
    public function ditolak()
    {
        $this->db->select('*');
        $this->db->from('lamaran');
        $this->db->join('alumni', 'alumni.id_alumni = lamaran.id_alumni');
        $this->db->join('lowongan', 'lowongan.id_lowongan = lamaran.id_lowongan');

        $this->db->where('lamaran.status_lamaran', "2");
        $this->db->order_by('lowongan.id_lowongan', 'DESC');
        return $this->db->get()->result();
    }
    public function diterima()
    {
        $this->db->select('*');
        $this->db->from('lamaran');
        $this->db->join('alumni', 'alumni.id_alumni = lamaran.id_alumni');
        $this->db->join('lowongan', 'lowongan.id_lowongan = lamaran.id_lowongan');

        $this->db->where('lamaran.status_lamaran', "3");
        $this->db->order_by('lowongan.id_lowongan', 'DESC');
        return $this->db->get()->result();
    }
    public function get_pengajuan_ditolak()
    {
        $this->db->select('*');
        $this->db->from('lamaran');
        $this->db->join('alumni', 'alumni.id_alumni = lamaran.id_alumni');
        $this->db->join('lowongan', 'lowongan.id_lowongan = lamaran.id_lowongan');

        $this->db->where('lamaran.status_lamaran', "2");
        $this->db->order_by('lowongan.id_lowongan', 'DESC');
        return $this->db->get()->result();
    }
    public function get_pengajuan_diterima()
    {
        $this->db->select('*');
        $this->db->from('lamaran');
        $this->db->join('alumni', 'alumni.id_alumni = lamaran.id_alumni');
        $this->db->join('lowongan', 'lowongan.id_lowongan = lamaran.id_lowongan');

        $this->db->where('lamaran.status_lamaran', "3");
        $this->db->order_by('lowongan.id_lowongan', 'DESC');
        return $this->db->get()->result();
    }
    public function get_pengajuan_p($id_lowongan)
    {
        $this->db->select('*');
        $this->db->from('lamaran');
        $this->db->join('alumni', 'alumni.id_alumni = lamaran.id_alumni');
        $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.jurusan_smk');
        $this->db->join('lowongan', 'lowongan.id_lowongan = lamaran.id_lowongan');
        $this->db->where('lamaran.status_lamaran', "3");
        $this->db->where('lowongan.id_lowongan', $id_lowongan);
        $this->db->order_by('lowongan.id_lowongan', 'DESC');
        return $this->db->get()->result();
    }
    public function get_row_alumni($telpon)
    {
        $this->db->where('telpon', $telpon);
        $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.jurusan_smk');

        return $this->db->get('alumni')->row();
    }
    public function get_row_alumni_nip($nip)
    {
        $this->db->where('nip', $nip);
        $this->db->join('jabatan', 'jabatan.id_jab = alumni.jabatan');
        $this->db->join('bidang', 'bidang.id_bidang = alumni.bidang');

        return $this->db->get('alumni')->row();
    }

    public function get_row_alumni2($id_alumni)
    {
        $this->db->where('id_alumni', $id_alumni);
        return $this->db->get('alumni')->row();
    }

    public function get_all_pengajuan_admin()
    {
        return $this->db->get('berkas')->result();
    }

    public function get_all_pengajuan($nip)
    {

        $this->db->where('nip', $nip);
        $this->db->order_by('id_berkas', 'DESC');
        return $this->db->get('berkas')->result();
    }

    public function cek_pass($password, $telpon)
    {
        $this->db->where('telpon', $telpon);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get('akun');

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function data_absen($nip)
    {
        $this->db->where('id_peg', $nip);
        $this->db->order_by('id_absen', 'DESC');
        return $this->db->get('absen')->result();
    }
    public function cek_absen($nip, $tanggal)
    {
        $this->db->where('id_peg', $nip);
        $this->db->where('tanggal', $tanggal);
        $this->db->order_by('id_absen', 'DESC');
        return $this->db->get('absen')->row();
    }
    public function cek_absen_pulang($nip, $tanggal)
    {
        $this->db->where('id_peg', $nip);
        $this->db->where('tanggal', $tanggal);
        $this->db->order_by('id_absen', 'DESC');
        return $this->db->get('absen')->result();
    }
    public function absen($id_peg)
    {
        $this->db->where('id_peg', $id_peg);
        $this->db->order_by('id_absen', 'DESC');
        return $this->db->get('absen')->result();
    }

    public function cari_bulan_absen($date1, $date2, $id_peg)
    {
        $this->db->select('*');
        $this->db->from('absen');
        $this->db->where('id_peg', $id_peg);
        $this->db->where('tanggal >=', $date1);
        $this->db->where('tanggal <=', $date2);
        $this->db->order_by('id_absen', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
}

/* End of file alumni_m.php */
