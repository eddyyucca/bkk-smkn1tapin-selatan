<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('order_model');
        $this->load->model('akun_model');
        ini_set('date.timezone', 'Asia/Kuala_Lumpur');
        $level_akun = $this->session->userdata('level');
        if ($level_akun != ("admin") <= ("kepala_gs")) {
            redirect('auth');
        } elseif ($level_akun == "hr_admin") {
            redirect('hr');
        } elseif ($level_akun == "admin_dep") {
            redirect('auth');
        } elseif ($level_akun == "vendor") {
            redirect('auth');
        } elseif ($level_akun == "pos") {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['judul'] = 'Order Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->getDataJoin();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/index', $data);
        $this->load->view('template/footer');
    }
    public function view($id)
    {
        $data['judul'] = 'View Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->order_model->where($id);
        $data['data2'] = $this->order_model->getDataJoin();
        $data['data3'] = $this->order_model->status($id);
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/view', $data);
        $this->load->view('template/footer');
    }


    public function hapusorder($id)
    {
        $this->order_model->delorder($id);
        $this->order_model->delkeranjang($id);
        redirect('order');
    }

    public function order_selesai()
    {
        $tanggal = $this->input->post('tanggal');
        $data['tanggal'] = $this->input->post('tanggal');

        $data['judul'] = 'Order Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->order_selesai($tanggal);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/order_selesai', $data);
        $this->load->view('template/footer');
    }
    public function cetak_order_selesai()
    {
        $tanggal = $this->input->post('tanggal');
        $data['tanggal'] = $this->input->post('tanggal');
        $data['judul'] = 'Order Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->order_selesai($tanggal);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        // $this->load->view('template/header', $data);
        $this->load->view('order/cetak_order_selesai', $data);
        // $this->load->view('template/footer');
    }

    public function order_ditolak()
    {
        $tahun =  $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        $data['bulan'] = $this->input->post('bulan');
        $data['tahun'] = $this->input->post('tahun');
        $data['judul'] = 'Order Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->order_ditolak();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/order_ditolak', $data);
        $this->load->view('template/footer');
    }
    public function order_ditolak_bulan()
    {
        $tahun =  $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        $data['bulan'] = $this->input->post('bulan');
        $data['tahun'] = $this->input->post('tahun');
        $data['judul'] = 'Order Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->cari_bulan_ditolak($tahun, $bulan);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/order_ditolak_bulan', $data);
        $this->load->view('template/footer');
    }
    public function cetak_order_ditolak()
    {
        $tahun =  $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        $data['judul'] = 'Order Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->order_ditolak();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        // $this->load->view('template/header', $data);
        $this->load->view('order/cetak_order_ditolak', $data);
        // $this->load->view('template/footer');
    }
    public function cetak_order_ditolak_bulan()
    {
        $tahun =  $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        $data['judul'] = 'Order Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->cari_bulan_ditolak($tahun, $bulan);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        // $this->load->view('template/header', $data);
        $this->load->view('order/cetak_order_ditolak_bulan', $data);
        // $this->load->view('template/footer');
    }

    public function selesai($id)
    {
        //update stok barang
        $x = $this->order_model->where($id);
        foreach ($x as $xx) {
            $id_k = $xx->id;
            $nilai1 = $xx->qty;
            $nilai2 = $xx->qty_order;
            $hasil = $nilai1 - $nilai2;
            $data = array(
                'qty' => $hasil
            );
            $update = $this->order_model->update_qty($data, $id_k);
        }
        //update status order//

        $data_status = array(
            'status' => 1,
        );
        $update_status = $this->order_model->update_status($data_status, $id);
        redirect('order');
    }

    public function view_selesai($id)
    {
        $data['judul'] = 'View Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->order_model->where($id);
        $data['data2'] = $this->order_model->getDataJoin();
        $data['data3'] = $this->order_model->status($id);
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/view_order_selesai', $data);
        $this->load->view('template/footer');
    }

    public function view_ditolak($id)
    {
        $data['judul'] = 'View Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->order_model->where($id);
        $data['data2'] = $this->order_model->getDataJoin();
        $data['data3'] = $this->order_model->status($id);
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/view_order_ditolak', $data);
        $this->load->view('template/footer');
    }

    public function cari()
    {
        $cari = $this->input->post('tanggal');

        $data['judul'] = 'Order Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->cari_order_selesai($cari);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/cari', $data);
        $this->load->view('template/footer');
    }

    public function report($id)
    {
        $x = $this->session->userdata('id_dep');
        $data['departemen'] = $this->order_model->dep($x);

        $data['judul'] = 'Report Barang';
        $data['data'] = $this->order_model->where($id);
        $data['data2'] = $this->order_model->getDataJoin();
        $data['data3'] = $this->order_model->status($id);
        $this->load->view('order/report', $data);
    }


    public function laporan_bulanan()
    {

        $tahun =  $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        $data['bulan'] = $this->input->post('bulan');
        $data['tahun'] = $this->input->post('tahun');

        $data['judul'] = 'laporan bulanan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->cari_bulan($tahun, $bulan);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/laporan_bulanan', $data);
        $this->load->view('template/footer');
    }
    public function order_selesai_bulan()
    {

        $tahun =  $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        $data['bulan'] = $this->input->post('bulan');
        $data['tahun'] = $this->input->post('tahun');
        $data['judul'] = 'Order Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->cari_bulan($tahun, $bulan);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/order_selesai_bulan', $data);
        $this->load->view('template/footer');
    }
    public function cetak_order_selesai_bulan()
    {

        $tahun =  $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        $data['bulan'] = $this->input->post('bulan');
        $data['tahun'] = $this->input->post('tahun');
        $data['judul'] = 'Order Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->cari_bulan($tahun, $bulan);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        // $this->load->view('template/header', $data);
        $this->load->view('order/cetak_order_selesai_bulan', $data);
        // $this->load->view('template/footer');
    }
    public function cetak_laporan_bulanan()
    {

        $tahun =  $this->input->post('tahun');
        $bulan = $this->input->post('bulan');


        $data['judul'] = 'laporan bulanan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->cari_bulan($tahun, $bulan);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        // $this->load->view('template/header', $data);
        $this->load->view('order/cetak_laporan_bulanan', $data);
        // $this->load->view('template/footer');
    }

    public function laporan_bidang()
    {
        $data_cari = $this->input->post('cari_bidang');
        $data['cari_bidang'] = $this->input->post('cari_bidang');
        $data['judul'] = 'laporan order departemen';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->cari_departemen($data_cari);
        $data['data_bidang'] = $this->akun_model->getDataDepartemen();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/laporan_bidang', $data);
        $this->load->view('template/footer');
    }
    public function cetak_laporan_bidang()
    {
        $data_cari = $this->input->post('cari_bidang');
        $data['cari_bidang'] = $this->input->post('laporan_bidang');
        $data['judul'] = 'laporan order departemen';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->cari_departemen($data_cari);
        $data['data_bidang'] = $this->akun_model->getDataDepartemen();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        // $this->load->view('template/header', $data);
        $this->load->view('order/cetak_laporan_bidang', $data);
        // $this->load->view('template/footer');
    }
}
