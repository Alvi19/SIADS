<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengguna_model');
		
    }

    public function index()
    {
        $data['title']  = 'SIAD SMA Pangurugan';
        $judul['judul'] = 'Managemen Pengguna';
        $queryAllPengguna = $this->Pengguna_model->ambildatapengguna();
        $DATA = array('queryPengguna' => $queryAllPengguna);
        $DATA2 = $judul + $DATA;
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/pengguna',$DATA2);
        $this->load->view('template/footer');
    
    }

    
}
