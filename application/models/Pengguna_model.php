<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Pengguna_model extends CI_Model 
{
    
    function ambildatapengguna()
      {
        $query = $this->db->get('tb_pengguna');
        return $query->result();
      }

      function input_data_pengguna($data)
      {
        return $this->db->insert('tb_pengguna', $data);
      }

      function delpengguna($id)
        {
        return $this->db->where('id', $id)->delete('tb_pengguna');
        }
      
                       
                        
}


/* End of file Kelas_model.php and path \application\models\Kelas_model.php */
