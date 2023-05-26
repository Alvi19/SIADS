<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Bukti_model extends CI_Model 
{
    function input_data($data)
    {
      $this->db->insert('tb_bukti', $data);

      return $this->db->insert_id();
    }

    function Detaildata($id)
    {
      $this->db->where('id', $id);
      $query = $this->db->get('tb_bukti');
      return $query->result();
    }


}