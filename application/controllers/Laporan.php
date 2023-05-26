<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title']  = 'SIAD SMA Pangurugan';
        // $queryAllKel = $this->M_global->ambildatakelas();
        // $DATA = array('queryKel' => $queryAllKel);
        $judul['judul'] = 'Laporan';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/laporan',$judul);
        $this->load->view('template/footer');  
    }
}

/* End of file Laporan.php and path \application\controllers\Laporan.php */
