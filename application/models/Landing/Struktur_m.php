<?php defined('BASEPATH') or exit('No direct script access allowed');

class Struktur_m extends CI_Model
{
     public function get()
     {
          $this->db->from('tb_sekolah');
          $query = $this->db->get();
          return $query;
     }

}
