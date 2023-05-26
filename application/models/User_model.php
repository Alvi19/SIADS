<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class User_model extends CI_Model 
{
  function all()
  {
    $query = $this->db->get('tb_user');

    return $query->result();
  }  

  function get($id)
  {
    $query = $this->db->where('id', $id)->get('tb_user');
    return $query->row();
  }  



    function create($data)
      {
        $this->db->insert('tb_user', $data);

        return $this->db->insert_id();
      }  

      function update($id, $data)
      {
        return $this->db->where('id', $id)->update('tb_user', $data);
      }  

      function delete($id)
      {
        return $this->db->where('id', $id)->delete('tb_user');
      }  

    

}
/* End of file Auth_model.php and path \application\models\Auth_model.php */
