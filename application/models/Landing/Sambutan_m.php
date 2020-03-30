<?php defined('BASEPATH') or exit('No direct script access allowed');

class Sambutan_m extends CI_Model
{
     public function get()
     {
          $this->db->from('tb_sambutan');
          $query = $this->db->get();
          return $query;
     }

}
