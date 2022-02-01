<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Makassar");
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('lowongan_m');
        $this->load->model('alumni_m');
        // $this->load->model('pegawai_m');
        // $this->load->model('pengajuan_m');
        $this->load->library('pagination');
        $this->load->library('cart');
        $level_akun = $this->session->userdata('level');
        if ($level_akun != "user") {

            return redirect('auth');
        }
    }
    public function index()
    {
        $data['judul'] = 'Dashboard Alumni';
        $data['nama'] = $this->session->userdata('nama_alumni');
        $telpon =  $this->session->userdata('telpon');
        $data['data'] = $this->alumni_m->get_row_alumni($telpon);
        $this->load->view('template_user/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template_user/footer');
    }

    public function lihat_lowongan($id_lowongan)
    {
        $data['judul'] = 'Data Lowongan';
        $data['nama'] = $this->session->userdata('nama_alumni');
        $data['data'] = $this->lowongan_m->get_row_lowongan($id_lowongan);

        $this->load->view('template/header', $data);
        $this->load->view('user/lowongan/lihat_lowongan', $data);
        $this->load->view('template/footer');
    }


    // pengajuan gaji
    // -------------------- //
    // public function pengajuan($id_pegawai)
    // {
    //     //logika waktu pengajuan
    //     $tanggal_lahir = "s";
    //     $birthDate = new DateTime($tanggal_lahir);
    //     $today = new DateTime("today");
    //     if ($birthDate > $today) {
    //         exit("0 tahun 0 bulan 0 hari");
    //     }
    //     $y = $today->diff($birthDate)->y;
    //     $m = $today->diff($birthDate)->m;
    //     $d = $today->diff($birthDate)->d;
    //     return $y . " tahun " . $m . " bulan " . $d . " hari";
    //     //end logika

    //     $data['judul'] = 'Data Pegawai';
    //     $data['data'] = $this->pegawai_m->get_all_pegawai();

    //     $this->load->view('template/header', $data);
    //     $this->load->view('admin/pegawai/pegawai_baru', $data);
    //     $this->load->view('template/footer');
    // }

    public function pengajuan()
    {
        $data['judul'] = 'Upload SK Terakhir';
        $data['nama'] = $this->session->userdata('nama_alumni');
        $id_pegawai =  $this->session->userdata('id_pegawai');
        $data['data'] = $this->pegawai_m->get_row_pegawai($id_pegawai);
        $nip =  $this->session->userdata('nip');
        $data['waktu'] = $this->pengajuan_m->cek_pengajuan($nip);
        $data['pesan'] = false;
        $data['keranjang'] = $this->cart->contents();
        $this->load->view('template_user/header', $data);
        $this->load->view('user/pengajuan/pengajuan_gaji', $data);
        $this->load->view('template_user/footer');
    }
    public function status_pengajuan()
    {

        $data['judul'] = 'Pengajuan Lamaran';
        $data['nama'] = $this->session->userdata('nama_alumni');
        $id_alumni = $this->session->userdata('id_alumni');
        $data['data'] = $this->alumni_m->get_status($id_alumni);
        $data['pesan'] = false;
        $this->load->view('template_user/header', $data);
        $this->load->view('user/lowongan/status_lamaran', $data);
        $this->load->view('template_user/footer');
    }

    public function upload_pdf()
    {
        $config['upload_path']   = './assets/file/';
        $config['allowed_types'] = 'pdf';
        //$config['max_size']      = 100; 
        //$config['max_width']     = 1024; 
        //$config['max_height']    = 768;  

        $this->load->library('upload', $config);
        // script upload file 1
        $this->upload->do_upload('file');
        $x = $this->upload->data();
        $telpon =  $this->session->userdata('telpon');
        $data = array(
            'data_pdf' => $x["file_name"],
        );
        $this->db->where('telpon', $telpon);
        $this->db->update('alumni', $data);
        redirect('user');
    }

    public function kirim_lamaran($id_lowongan)
    {
        $id_alumni = $this->session->userdata('id_alumni');
        $cek = $this->alumni_m->cek($id_lowongan, $id_alumni);
        if ($cek == true) {
            $data['notif'] = true;
            $data['judul'] = 'Data Lowongan';
            $data['data'] = $this->lowongan_m->get_all_lowongan();
            $data['nama'] = $this->session->userdata('nama_alumni');

            $this->load->view('template_user/header', $data);
            $this->load->view('user/lowongan/index', $data);
            $this->load->view('template_user/footer');
        } else {

            $data = array(
                'id_lowongan' => $id_lowongan,
                'id_alumni' => $this->session->userdata('id_alumni'),
                'status_lamaran' => $this->input->post('status'),
            );

            $this->db->insert('lamaran', $data);
            redirect('user/data_lowongan');
        }
    }
    // pengajuan end
    // -------------------- //

    // passoword
    // ==========================

    public function ubah_password()
    {
        $data['judul'] = 'Ubah Password Pegawai';
        $data['nama'] = $this->session->userdata('nama_alumni');
        $telpon =  $this->session->userdata('telpon');
        $data['data'] = $this->alumni_m->get_row_alumni($telpon);
        $data['pesan'] = false;

        $this->load->view('template_user/header', $data);
        $this->load->view('user/password/ubah_password', $data);
        $this->load->view('template_user/footer');
    }
    public function isi_tentang_saya()
    {

        $data['judul'] = 'Ubah Password Pegawai';
        $data['nama'] = $this->session->userdata('nama_alumni');
        $telpon =  $this->session->userdata('telpon');
        $data['data'] = $this->alumni_m->get_row_alumni($telpon);
        $data['pesan'] = false;

        $this->load->view('template_user/header', $data);
        $this->load->view('user/tentang_saya', $data);
        $this->load->view('template_user/footer');
    }
    public function proses_ubah_password()
    {
        $telpon =  $this->session->userdata('telpon');
        $password = md5($this->input->post('password_lama'));
        $cek = $this->alumni_m->cek_pass($password, $telpon);

        if ($cek == true) {
            $data['judul'] = 'Ubah Password Pegawai';
            $data['nama'] = $this->session->userdata('nama_alumni');
            $data['pesan'] = '<div class="alert alert-success" role="alert">Password Berhasil Diubah !
    </div>';
            $data_update = array(
                "password" => md5($this->input->post('password_baru'))
            );
            $this->db->where('telpon', $telpon);
            $this->db->update('akun', $data_update);
            $this->load->view('template_user/header', $data);
            $this->load->view('user/password/ubah_password', $data);
            $this->load->view('template_user/footer');
        } else {
            $data['judul'] = 'Ubah Password Pegawai';
            $data['nama'] = $this->session->userdata('nama_alumni');
            $data['keranjang'] = $this->cart->contents();

            $data['pesan'] = '<div class="alert alert-danger" role="alert">Password Salah !
    </div>';

            $this->load->view('template_user/header', $data);
            $this->load->view('user/password/ubah_password', $data);
            $this->load->view('template_user/footer');
        }
    }
    // end password

    // atk
    public function atk()

    {
        //page
        $config['base_url'] = site_url('user/atk'); //site url
        $config['total_rows'] = $this->db->count_all('data_barang'); //total row
        $config['per_page'] = 15;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['data'] = $this->atk_model->penomoran($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();


        //end


        $data['judul'] = 'Tabel Data ATK';
        $data['databarang'] = $this->atk_model->getDataBarang();
        $data['keranjang'] = $this->cart->contents();
        $data['nama'] = $this->session->userdata('nama_user');
        $this->load->view('template_user/header', $data);
        $this->load->view('user/atk/atk', $data);
        $this->load->view('template_user/footer');
    }

    public function cari()
    {
        $cari = $this->input->post('cari');

        $data['judul'] = 'Tabel Data ATK';
        $data['databarang'] = $this->atk_model->cari($cari);
        $data['keranjang'] = $this->cart->contents();
        $data['nama'] = $this->session->userdata('nama_user');
        $this->load->view('template_user/header', $data);
        $this->load->view('user/atk/cari', $data);
        $this->load->view('template_user/footer');
    }

    public function pencarian()
    {
        $data = array(
            'cari' => $this->input->post('cari')
        );
        $cari = $this->atk_model->cari($data);
    }

    public function order($id)
    {
        $data['judul'] = 'View Order';
        $data['data'] = $this->atk_model->getDataBarangById($id);
        $data['keranjang'] = $this->cart->contents();
        $data['nama'] = $this->session->userdata('nama_user');
        $this->load->view('template_user/header', $data);
        $this->load->view('user/atk/view_order', $data);
        $this->load->view('template_user/footer');
    }

    public function ProsesOrder($id)
    {
        $data_barang = array(
            'id' => $id,
            'price' => '',
            'item' => $this->input->post('item'),
            'name' => $this->session->userdata('nama_alumni'),
            'qty' => $this->input->post('qty'),
            'bidang' => $this->session->userdata('bidang'),
            'satuan' =>  $this->input->post('satuan'),
            'tanggal' => date('Y-m-d')
        );
        $this->cart->insert($data_barang);

        var_dump($data_barang);
        redirect('user/atk');
    }

    public function keranjang()
    {
        $data['judul'] = 'View Order';

        $data['nama'] = $this->session->userdata('nama_user');
        $data['keranjang'] = $this->cart->contents();

        $this->load->view('template_user/header', $data);
        $this->load->view('user/atk/keranjang', $data);
        $this->load->view('template_user/footer');
    }

    public function hapus($rowid)
    {
        if ($rowid == "semua") {
            $this->cart->destroy();
        } else {
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
            $this->cart->update($data);
        }
        redirect('user/keranjang');
    }


    public function simpan_tentang_saya()
    {
        $telpon = $this->session->userdata('telpon');
        $data = array(
            'tentang_saya' =>  $this->input->post('tentang_saya'),
        );
        $this->db->where('telpon', $telpon);
        $this->db->update('alumni', $data);
        redirect('user');
    }


    public function data_lowongan()
    {
        $data['judul'] = 'Data Lowongan';
        $data['data'] = $this->lowongan_m->get_all_lowongan();
        $data['nama'] = $this->session->userdata('nama_alumni');
        $data['notif'] = false;
        $this->load->view('template_user/header', $data);
        $this->load->view('user/lowongan/index', $data);
        $this->load->view('template_user/footer');
    }
}   

/* End of file User.php */
