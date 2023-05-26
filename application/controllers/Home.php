<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
		
    }

    public function index()
    {
        $data['title']  = 'SIAD SMA Pangurugan';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/home');
        $this->load->view('template/footer');
    }
}

