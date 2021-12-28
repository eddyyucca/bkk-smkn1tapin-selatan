<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Atk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('atk_model');
        $this->load->model('order_model');
        $this->load->library('form_validation');

        // $level_akun = $this->session->userdata('level');
        // if ($level_akun != ("admin") <= ("kepala_gs")) {
        //     redirect('auth');
        // } elseif ($level_akun == "hr_admin") {
        //     redirect('hr');
        // } elseif ($level_akun == "admin_dep") {
        //     redirect('auth');
        // } elseif ($level_akun == "vendor") {
        //     redirect('auth');
        // } elseif ($level_akun == "pos") {
        //     redirect('auth');
        // }
    }

    public function index()
    {

        //load index
        $data['judul'] = 'ATK';
        // $data['alerts'] = $this->order_model->getDataJoin();
        // $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->atk_model->getDataBarang();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/index', $data);
        $this->load->view('template/footer');
    }
    public function tambah_barang()
    {
        $data['judul'] = 'Input Data Barang';
        // $data['alerts'] = $this->order_model->getDataJoin();
        // $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/input', $data);
        $this->load->view('template/footer', $data);
    }

    public function order($id = null)

    {
        $data['judul'] = 'Order ATK';
        // $data['alerts'] = $this->order_model->getDataJoin();
        // $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->atk_model->getDataBarangById($id);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/order', $data);
        $this->load->view('template/footer');
    }

    public function ProsesOrder($id = null)
    {
        $data = array(
            'id' => 'id',
            'order' => 'id',
            'status' => '1'
        );
        $this->model->atk_model($data, $id);
    }

    public function prosesInput()
    {

        $this->form_validation->set_rules('item', 'Item', 'required');
        $this->form_validation->set_rules('qty', 'quantity', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_barang();
        } else {

            $data = array(
                'item' => $this->input->post('item'),
                'qty' => $this->input->post('qty'),
                'satuan' => $this->input->post('satuan')
            );
            $insert = $this->atk_model->insertbarang($data);
            redirect('atk/view_data');
        }
    }

    public function view_data()
    {
        $data['judul'] = 'Tabel Data ATK';
        // $data['alerts'] = $this->order_model->getDataJoin();
        // $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->atk_model->getDataBarang();
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/view_data', $data);
        $this->load->view('template/footer');
    }
    public function cetak_atk()
    {
        $data['judul'] = 'Tabel Data ATK';
        // $data['alerts'] = $this->order_model->getDataJoin();
        // $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->atk_model->getDataBarang();
        $data['level_akun'] = $this->session->userdata('level');

        // $this->load->view('template/header', $data);
        $this->load->view('atk/cetak_view_data', $data);
        // $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data ATK';
        // $data['alerts'] = $this->order_model->getDataJoin();
        // $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->atk_model->getDataBarangById($id);
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/edit', $data);
        $this->load->view('template/footer');
    }

    public function prosesEdit($id)
    {
        $this->form_validation->set_rules('item', 'Item', 'required');
        $this->form_validation->set_rules('qty', 'quantity', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = array(
                'item' => $this->input->post('item'),
                'qty' => $this->input->post('qty'),
                'satuan' => $this->input->post('satuan')
            );
            $update = $this->atk_model->update($id, $data);
            redirect('atk/view_data');
        }
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $delete = $this->db->delete('data_barang');
        redirect('atk/view_data');
    }

    public function excel()
    {
        $data['data'] = $this->atk_model->excel();
        $this->load->view('atk/excel', $data);
    }
}
/* End of file Atk.php */
