<?php defined('BASEPATH') or exit('No direct script access allowed');

class Visi_m extends CI_Model
{
     public function get()
     {
          $this->db->from('tb_visi_misi');
          $query = $this->db->get();
          return $query;
     }

}
