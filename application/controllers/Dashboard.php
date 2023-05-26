<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
		
    }
public function index()
    {
        $data['title']  = 'SIAD SMA Pangurugan';
		$this->load->view('user/header',$data);
		$this->load->view('user/sidebar');
        $this->load->view('user/topbar');
        $this->load->view('user/dashboard');
        $this->load->view('user/footer');
    }

}