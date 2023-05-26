<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_global_model');
        $this->load->model('User_model');
        $this->load->model('Periode_model');
    }

    public function index()
    {
        $data['title']  = 'SIAD SMA Pangurugan';
        $judul = 'Data Petugas';
        $petugas = $this->User_model->all();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/petugas', compact('petugas', 'judul'));
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $akses = $this->input->post('akses');


        $data = array(
            'username' => $username,
            'password' => $password,
            'akses' => $akses
        );

        $query = $this->User_model->create($data);


        if ($query > 0) {
            $this->M_global_model->ntf_swal('Informasi', 'Berhasil simpan data', 'success');
        } else {
            $this->M_global_model->ntf_swal('Informasi', 'Gagal simpan data', 'error');
        }
        redirect(base_url('Petugas'));
    }

    public function edit($id)
    {
        $data['title']  = 'SIAD SMA Pangurugan';
        $judul = 'Edit Data Petugas';

        $petugas = $this->User_model->get($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/petugas-edit', compact('petugas', 'judul'));
        $this->load->view('template/footer');
    }

    public function update()
	{
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $akses = $this->input->post('akses');
		$password = $this->input->post('password');
      
        
        $data = array(
			'username' => $username,
            'akses' => $akses,
        );

        if ($password) {
            $data['password'] = $password;
        }

		$query = $this->User_model->update($id, $data);
		if($query <0){
            $this->M_global_model->ntf_swal('Informasi', 'Gagal update data', 'error');
			
		} else {
			$this->M_global_model->ntf_swal('Informasi', 'Berhasil update data', 'success');
		}
		redirect(base_url('Petugas'));

	}


    public function delete($id)
    {
        $query = $this->User_model->delete($id);
        if ($query) {
            $this->M_global_model->ntf_swal('Informasi', 'Berhasil hapus data', 'success');
        } else {
            $this->M_global_model->ntf_swal('Informasi', 'Gagal hapus data', 'error');
        }
        redirect(base_url('Petugas'));
    }
}

/* End of file Kelas.php and path \application\controllers\Kelas.php */
