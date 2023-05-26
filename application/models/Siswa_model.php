<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Siswa_model extends CI_Model 
{
    function ambildatasiswa()
    {
      $query = $this->db->get('tb_siswa');
      return $query->result();
    }
    
    function input_data_siswa($data)
      {
        return $this->db->insert('tb_siswa', $data);
      }

      function deleteSiswa($id)
		{
			return $this->db->where('id', $id)->delete('tb_siswa');
         }
         
      function updateDataSiswa($id, $data) {
			return $this->db->where('id', $id)->update('tb_siswa', $data);
		}

        function getDataDetail($id) 
    {
			$this->db->where('id', $id);
			$query = $this->db->get('tb_siswa');
			return $query->row();
		}

    function cekNisn($nisn, $id = null) {
      $this->db->where('nisn', $nisn);
      if ($id) {
        $this->db->where('id !=', $id);
      }
      $query = $this->db->get('tb_siswa');
      return $query->row();
    }
  
                        
}


/* End of file Siswa_model.php and path \application\models\Siswa_model.php */
