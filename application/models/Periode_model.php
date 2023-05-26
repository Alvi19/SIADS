<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Periode_model extends CI_Model 
{
    
    function ambildataperiode()
      {
        $query = $this->db->get('tb_periode');
        return $query->result();
      }

      function input_data_periode($data)
      {
        return $this->db->insert('tb_periode', $data);
      }

      function delPeriode($id)
        {
        return $this->db->where('id', $id)->delete('tb_periode');
        }
      
      
        
        // Get period from database
        function get($params = array())
        {
            if(isset($params['id']))
            {
                $this->db->where('id', $params['id']);
            }
    
            if(isset($params['status']))
            {
                $this->db->where('period_status', $params['status']);
            }
    
            if(isset($params['period_start']))
            {
                $this->db->where('period_start', $params['period_start']);
            }
            if(isset($params['period_end']))
            {
                $this->db->where('period_end', $params['period_end']);
            }
    
            if(isset($params['limit']))
            {
                if(!isset($params['offset']))
                {
                    $params['offset'] = NULL;
                }
    
                $this->db->limit($params['limit'], $params['offset']);
            }
            if(isset($params['order_by']))
            {
                $this->db->order_by($params['order_by'], 'desc');
            }
            else
            {
                $this->db->order_by('id', 'desc');
            }
    
            $this->db->select('id, period_start, period_end, period_status');
            $res = $this->db->get('tb_periode');
    
            if(isset($params['id']))
            {
                return $res->row_array();
            }
            else
            {
                return $res->result_array();
            }
        }

        
        function get2($id)
        {
          $query = $this->db->where('id', $id)->get('tb_periode');
          return $query->row();
        }  

        function create($data)
        {
          $this->db->insert('tb_periode', $data);
  
          return $this->db->insert_id();
        }  
  
        function update($id, $data)
        {
          return $this->db->where('id', $id)->update('tb_periode', $data);
        }  
  
        function delete($id)
        {
          return $this->db->where('id', $id)->delete('tb_periode');
        }  

        function cekPeriode($tahun_ajaran, $id = null) {
          $this->db->where('tahun_ajaran', $tahun_ajaran);
          if ($id) {
            $this->db->where('id !=', $id);
          }
          $query = $this->db->get('tb_periode');
          return $query->row();
        }
      
  
                       
                        
}


/* End of file Kelas_model.php and path \application\models\Kelas_model.php */
