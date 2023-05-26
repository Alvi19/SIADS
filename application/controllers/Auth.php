<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
		$this->load->model('M_global_model');

		$this->load->library('session');
	}
    public function index()
    {
		$auth = $this->session->userdata('Auth');
		if ($auth) {
			redirect('home');
		}
        $data['title']  = 'SIAD SMA Pangurugan';
		$this->load->view('login/auth',$data);
    }

    public function proses_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek_login = $this->Auth_model->login($username,$password);

		if(empty($cek_login))
		{
			$this->M_global_model->ntf_swal('Informasi', 'Maap! Username atau Password yang ada masukan salah', 'error');
			redirect('auth');
		}elseif($password == $cek_login->password)
		{
			$data_session = $cek_login;
			unset($data_session->password);
			$this->session->set_userdata('Auth', $data_session);
			$this->M_global_model->ntf_swal('Informasi', 'Selamat Anda Berhasil Login', 'success'); 
			redirect('home');
		}
	}

	function logout(){
		$this->session->unset_userdata('Auth');
        $this->M_global_model->ntf_swal('Informasi', 'Selamat Anda Berhasil Logout', 'info'); 
        redirect('auth');
        
    }
    
}

/* End of file Auth.php and path \application\controllers\Auth.php */
