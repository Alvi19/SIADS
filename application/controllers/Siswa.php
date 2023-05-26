<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Kelas_model');
        $this->load->model('Periode_model');
        $this->load->model('M_global_model');
        
        
    }

    public function index()
    {
        $data['title']  = 'SIAD SMA Pangurugan';
        $judul['judul'] = 'Data Siswa';
        $queryAllKel = $this->Kelas_model->ambildatakelas();
        $Tampil = array('queryKel' => $queryAllKel);
        $queryAllSis = $this->Siswa_model->ambildatasiswa();
        $DATA2 = array('querySis' => $queryAllSis);
        $queryAllPeriode = $this->Periode_model->ambildataperiode();
        $DATA3 = array('queryPeriode' => $queryAllPeriode);
        $DATA4 = $judul +$Tampil +$DATA2 + $DATA3;
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/siswa',$DATA4);
        $this->load->view('template/footer');
    }

    public function editsiswa($id){
        

        $data['title']  = 'SIAD SMA Pangurugan';
        $judul['judul'] = 'Edit Data Siswa';
        
        $queryAllSis = $this->Siswa_model->getDataDetail($id);
        $DATA2 = array('querySis' => $queryAllSis);
       
        $DATA4 = $judul  +$DATA2 ;
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/v_editsiswa',$DATA4);
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
		$nisn = $this->input->post('nisn');
		$password = $this->input->post('password');
        $nama = $this->input->post('nama');
		$nama_kelas = $this->input->post('nama_kelas');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$nama_orangtua = $this->input->post('nama_orangtua');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$tahun_ajaran = $this->input->post('tahun_ajaran');
        $status = $this->input->post('status');

        $cekNisn = $this->Siswa_model->cekNisn($nisn);
		if ($cekNisn) {
            $this->M_global_model->ntf_swal('Informasi', 'Error Nisn sudah ada', 'error');
            redirect(base_url('siswa'));
        }
        
        $data = array(
			'nisn' => $nisn,
			'password' => $password,
            'nama' => $nama,
			'nama_kelas' => $nama_kelas,
			'tanggal_lahir' => $tanggal_lahir,
			'nama_orangtua' => $nama_orangtua,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'tahun_ajaran' => $tahun_ajaran,
            'status' => $status
			
        );

        $query = $this->Siswa_model->input_data_siswa($data);

        if($query)
        {
            $this->M_global_model->ntf_swal('Informasi', 'Berhasil simpan data', 'success'); 
        }else{
            $this->M_global_model->ntf_swal('Informasi', 'Gagal simpan data', 'error');
		}
        redirect(base_url('siswa'));
    }
    public function fungsiEdit()
	{
        $id = $this->input->post('id');
        $nisn = $this->input->post('nisn');
        $nama = $this->input->post('nama');
		$nama_kelas = $this->input->post('nama_kelas');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$nama_orangtua = $this->input->post('nama_orangtua');
        $alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$tahun_ajaran = $this->input->post('tahun_ajaran');
        $status = $this->input->post('status');

        $password = $this->input->post('password');

        $cekNisn = $this->Siswa_model->cekNisn($nisn, $id);
		if ($cekNisn) {
            $this->M_global_model->ntf_swal('Informasi', 'Error Nisn sudah ada', 'error');
            redirect(base_url('siswa'));
        }
      
        
        $data = array(
			'nisn' => $nisn,
            'nama' => $nama,
			'nama_kelas' => $nama_kelas,
			'tanggal_lahir' => $tanggal_lahir,
			'nama_orangtua' => $nama_orangtua,
            'alamat' => $alamat,
			'no_hp' => $no_hp,
			'tahun_ajaran' => $tahun_ajaran,
            'status' => $status
        );

        if ($password) {
            $data['password'] = $password;
        }

		$query = $this->Siswa_model->updateDataSiswa($id, $data);
		if($query <0){
            $this->M_global_model->ntf_swal('Informasi', 'Gagal update data', 'error');
			
		} else {
			$this->M_global_model->ntf_swal('Informasi', 'Berhasil update data', 'success');
		}
		redirect(base_url('siswa'));

	}
    public function fungsiDelete($id)
	{
		$query = $this->Siswa_model->deleteSiswa($id);
		if($query){
			
			$this->M_global_model->ntf_swal('Informasi', 'Berhasil hapus data', 'success');
		} else {
			$this->M_global_model->ntf_swal('Informasi', 'Gagal hapus data', 'error');
		}
		redirect(base_url('siswa'));
    }
}

/* End of file Siswa.php and path \application\controllers\Siswa.php */
