<?php
class Periode extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_global_model');
        $this->load->model('Periode_model');
        $this->load->model('Siswa_model');
    }

    public function index()
    {

        $data['title']  = 'SIAD SMA Pangurugan';
        $judul['judul'] = 'Tahun Ajaran';
        $queryAllPeriode = $this->Periode_model->ambildataperiode();
        $DATA = array('queryPeriode' => $queryAllPeriode);
        $DATA2 = $judul + $DATA;
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/periode', $DATA2);
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {

        $tahun_ajaran = $this->input->post('tahun_ajaran');
        $status = $this->input->post('status');


        $cekPeriode = $this->Periode_model->cekPeriode($tahun_ajaran);
		if ($cekPeriode) {
            $this->M_global_model->ntf_swal('Informasi', 'Error Periode sudah ada', 'error');
            redirect(base_url('Periode'));
        }

        $data = array(

            'tahun_ajaran' => $tahun_ajaran,
            'status' => $status

        );

        $query = $this->Periode_model->input_data_periode($data);

        if ($query) {
            $this->M_global_model->ntf_swal('Informasi', 'Berhasil simpan data', 'success');
        } else {
            $this->M_global_model->ntf_swal('Informasi', 'Gagal simpan data', 'error');
        }
        redirect(base_url('Periode'));
    }

    public function update()
    {
        $id = $this->input->post('id');
        $tahun_ajaran = $this->input->post('tahun_ajaran');
        $status = $this->input->post('status');

        $cekPeriode = $this->Periode_model->cekPeriode($tahun_ajaran, $id);
		if ($cekPeriode) {
            $this->M_global_model->ntf_swal('Informasi', 'Error Periode sudah ada', 'error');
            redirect(base_url('Periode'));
        }

        $data = array(
            'tahun_ajaran' => $tahun_ajaran,
            'status' => $status,
        );

        $query = $this->Periode_model->update($id, $data);
        if ($query < 0) {
            $this->M_global_model->ntf_swal('Informasi', 'Gagal update data', 'error');
        } else {
            $this->M_global_model->ntf_swal('Informasi', 'Berhasil update data', 'success');
        }
        redirect(base_url('Periode'));
    }

    public function delete($id)
    {
        $query = $this->Periode_model->delete($id);
        if ($query) {

            $this->M_global_model->ntf_swal('Informasi', 'Berhasil hapus data', 'success');
        } else {
            $this->M_global_model->ntf_swal('Informasi', 'Gagal hapus data', 'error');
        }
        redirect(base_url('Periode'));
    }

    public function edit($id){
        

        $data['title']  = 'SIAD SMA Pangurugan';
        $judul = 'Edit Data Periode';
        
        $periode = $this->Periode_model->get2($id);
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/periode-edit', compact('periode', 'judul'));
        $this->load->view('template/footer');
    }

}
