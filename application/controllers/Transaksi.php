<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Kelas_model');
        $this->load->model('Bukti_model');
        $this->load->model('M_global_model');
        $this->load->model('Transaksi_model');
    }

    public function index()
    {
        $judul = 'Transaksi';
        $data['title']  = 'SIAD SMA Pangurugan';

        $pembayaran = $this->Transaksi_model->ambil_data_pembayaran(0);
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/transaksi', compact('pembayaran', 'judul'));
        $this->load->view('template/footer');  
    }


    public function pembayaran($id)
    {
        $data['title']  = 'SIAD SMA Pangurugan';
        $queryPemb = $this->Transaksi_model->Detaildata($id);
        $siswa_id = $queryPemb->siswa_id;
        $DATA = array('queryPembayar' => $queryPemb);
        $queryUserDetail = $this->Siswa_model->getDataDetail($siswa_id);
        $DATA2 = array('queryUserEdit' => $queryUserDetail);
        $judul['judul'] = 'Pembayaran';
        $tamp = $judul + $DATA2 + $DATA;
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/pembayaran',$tamp);
        $this->load->view('template/footer');  
    }

    public function bukti($id)
    {
        $data['title']  = 'SIAD SMA Pangurugan';
        $transaksi = $this->Transaksi_model->Detaildata($id);
        $detail = $this->Bukti_model->Detaildata($transaksi->bukti_id);
        $DATA = array('Detail' => $detail);
        $judul['judul'] = 'Pembayaran';
        $tamp = $judul + $DATA;

        $bukti = $detail[0];

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/bukti',compact('bukti'));
        $this->load->view('template/footer');  
    }

    public function transaksi($id){
       $tanggal = $this->input->post('tanggal');
       $setoran = $this->input->post('setoran');
       $transaksi = $this->Transaksi_model->Detaildata($id);

       $data = array(
        'tanggal' => $tanggal,
        'setoran' => $setoran,
        'biaya' => $transaksi->biaya - $setoran,
        'status' => 1
       );

    //    var_dump($biaya); die;
    //  $data['biaya'] = $biaya->biaya - $setoran;
     $query = $this->Transaksi_model->updateData($id, $data);
     
    //  var_dump($query);
	// 	die;

     if($query)
     {
         $this->M_global_model->ntf_swal('Informasi', 'Berhasil simpan data', 'success'); 
     }else{
         $this->M_global_model->ntf_swal('Informasi', 'Gagal simpan data', 'error');
     }
     redirect(base_url('transaksi'));
    }
}

/* End of file Transaksi.php and path \application\controllers\Transaksi.php */
