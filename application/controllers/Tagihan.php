<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Kelas_model');
        $this->load->model('M_global_model');
        $this->load->model('Transaksi_model');
    }
    public function index()
    {
        $auth = $this->session->userdata('AuthSiswa');
        if (!$auth) {
            redirect(base_url('AuthSiswa'));
        }
        $siswa_id = $auth->id;

        $data['title']  = 'SIAD SMA Pangurugan';
        $judul['judul'] = 'Tagihan Siswa';
        $queryPemb = $this->Transaksi_model->ambil_data_pembayaran($siswa_id);
        $DATA = array('queryPembayar' => $queryPemb);
        $tamp = $judul + $DATA;
        // var_dump($tamp);
        // exit;
		$this->load->view('user/header',$data);
		$this->load->view('user/sidebar');
        $this->load->view('user/topbar');
        $this->load->view('user/tagihan',$tamp);
        $this->load->view('user/footer');
    }

}