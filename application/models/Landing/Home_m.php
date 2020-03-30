<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home_m extends CI_Model
{
     public function get_pengumuman()
     {
          $this->db->from('tb_pengumuman');
          $this->db->order_by('created_pengumuman','DESC');
          $query = $this->db->get();
          return $query;
     }

}
