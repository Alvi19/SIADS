<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_global_model');
        $this->load->model('Kelas_model');
        $this->load->model('Periode_model');
    }

    public function index()
    {
        $data['title']  = 'SIAD SMA Pangurugan';
        $judul['judul'] = 'Data Kelas';
        $queryAllKel = $this->Kelas_model->ambildatakelas();
        $DATA = array('queryKel' => $queryAllKel);
        $queryAllPeriode = $this->Periode_model->ambildataperiode();
        $DATA2 = array('queryPeriode' => $queryAllPeriode);
        $DATA3 = $judul + $DATA + $DATA2;
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/kelas',$DATA3);
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
		$kode_kelas = $this->input->post('kode_kelas');
        $nama_kelas = $this->input->post('nama_kelas');
        $jumlah = $this->input->post('jumlah');
      
        
        $data = array(
            'kode_kelas' => $kode_kelas,
            'nama_kelas' => $nama_kelas,
            'jumlah' => $jumlah
        );

        $query = $this->Kelas_model->input_data_kelas($data);

        
        if($query > 0)
        {
            $this->M_global_model->ntf_swal('Informasi', 'Berhasil simpan data', 'success'); 
        }else{
            $this->M_global_model->ntf_swal('Informasi', 'Gagal simpan data', 'error');
		}
        redirect(base_url('kelas'));
	}

    public function edit($id)
    {
        $data['title']  = 'SIAD SMA Pangurugan';
        $judul = 'Edit Data Kelas';

        $kelas = $this->Kelas_model->get($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/kelas-edit', compact('kelas', 'judul'));
        $this->load->view('template/footer');
    }

    public function update()
	{
        $id = $this->input->post('id');
        $kode_kelas = $this->input->post('kode_kelas');
        $nama_kelas = $this->input->post('nama_kelas');
		$jumlah = $this->input->post('jumlah');
      
        
        $data = array(
			'kode_kelas' => $kode_kelas,
            'nama_kelas' => $nama_kelas,
            'jumlah' => $jumlah,
        );

		$query = $this->Kelas_model->update($id, $data);
		if($query <0){
            $this->M_global_model->ntf_swal('Informasi', 'Gagal update data', 'error');
			
		} else {
			$this->M_global_model->ntf_swal('Informasi', 'Berhasil update data', 'success');
		}
		redirect(base_url('Kelas'));

	}

    public function delete($id)
	{
		$query = $this->Kelas_model->delKel($id);
		if($query){
			
			$this->M_global_model->ntf_swal('Informasi', 'Berhasil hapus data', 'success');
		} else {
			$this->M_global_model->ntf_swal('Informasi', 'Gagal hapus data', 'error');
		}
		redirect(base_url('Kelas'));
	}

}

/* End of file Kelas.php and path \application\controllers\Kelas.php */
