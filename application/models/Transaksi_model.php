<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{

    function Detaildata($id)
    {
        $this->db->where('id', $id);
        $this->db->limit(1);
        $query = $this->db->get('tb_pembayaran');
        return $query->row();
    }


    function getDataUserDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_siswa');
        return $query->row();
    }

    function all_data_pembayaran()
    {
        $this->db->order_by('tanggal', 'DESC');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_pembayaran');
        return $query->result();
    }


    function ambil_data_pembayaran($id)
    {
        if ($id == 0) {
            $this->db->where('bukti_id IS NOT NULL');
        } else {
            $this->db->where('siswa_id', $id);
        }
        $this->db->order_by('tanggal', 'DESC');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_pembayaran');
        return $query->result();
    }

    function sisaTagihanTerakhir($id = null)
    {
        if ($id) {
            $this->db->where('siswa_id', $id);
        }
        $this->db->order_by('tanggal', 'DESC');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_pembayaran');
        $result = $query->result();
        return $result ? $result[0]->biaya : 0;
    }


    function input_setoran($data)
    {

        return $this->db->insert('tb_pembayaran', $data);
    }

    function updateData($id, $data)
    {
        return $this->db->where('id', $id)->update('tb_pembayaran', $data);
    }

    function tambah_tagihan($nama_kelas, $tahun_ajaran, $biaya)
    {
        $this->db->where('nama_kelas', $nama_kelas);
        $this->db->where('tahun_ajaran', $tahun_ajaran);
        $this->db->where('status', 'AKTIF');
        $query = $this->db->get('tb_siswa');

        $siswa = $query->result();
        foreach ($siswa as $siswa_) {
            $biayaOld = $this->Transaksi_model->sisaTagihanTerakhir($siswa_->id);
            $data = array(
                'siswa_id' => $siswa_->id,
                'bukti_id' => null,
                'nisn' =>  $siswa_->nisn,
                'nama' => $siswa_->nama,
                'kelas' => $siswa_->nama_kelas,
                'tanggal' => date("Y-m-d"),
                'setoran' => 0,
                'biaya' => $biayaOld + $biaya,
                'status' => 1,
            );
            $query = $this->input_setoran($data);
        }
    }

    function delete($id)
    {
      return $this->db->where('id', $id)->delete('tb_pembayaran');
    }  
}


/* End of file Transaksi_model.php and path \application\models\Transaksi_model.php */
