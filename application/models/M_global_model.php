<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_global_model extends CI_Model 
{

    public function ntf_swal($title, $body, $color)
    {
      $ntf = [
          'ntf_swal' => true,
          'ntf_title' => $title,
          'ntf_body' => $body,
          'ntf_color' => $color
      ];

      $this->session->set_flashdata($ntf);
    }

    
                    
}


/* End of file M_global_model.php and path \application\models\M_global_model.php */
