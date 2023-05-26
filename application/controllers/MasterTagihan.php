<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterTagihan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Kelas_model');
        $this->load->model('M_global_model');
        $this->load->model('Periode_model');
        $this->load->model('Transaksi_model');
    }

    public function index()
    {
        $data['title']  = 'SIAD SMA Pangurugan';
        $judul['judul'] = 'Master Tagihan';
        $queryPemb = $this->Transaksi_model->all_data_pembayaran();
        $DATA = array('queryPembayar' => $queryPemb);
        $queryAllKel = $this->Kelas_model->ambildatakelas();
        $Tampil = array('queryKel' => $queryAllKel);
        $queryAllPeriode = $this->Periode_model->ambildataperiode();
        $DATA3 = array('queryPeriode' => $queryAllPeriode);
        $tamp = $judul + $DATA+$Tampil + $DATA3;
        // var_dump($tamp);
        // exit;
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/tagihan',$tamp);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
		$nama_kelas = $this->input->post('nama_kelas');
		$tahun_ajaran = $this->input->post('tahun_ajaran');
		$biaya = $this->input->post('biaya');

        $this->Transaksi_model->tambah_tagihan($nama_kelas, $tahun_ajaran, $biaya);
        redirect(base_url('MasterTagihan'));
    }

    public function delete($id)
    {
        $query = $this->Transaksi_model->delete($id);
        if ($query) {
            $this->M_global_model->ntf_swal('Informasi', 'Berhasil hapus data', 'success');
        } else {
            $this->M_global_model->ntf_swal('Informasi', 'Gagal hapus data', 'error');
        }
        redirect(base_url('MasterTagihan'));
    }


}