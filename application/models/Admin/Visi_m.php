<?php defined('BASEPATH') or exit('No direct script access allowed');

class Visi_m extends CI_Model
{
     public function get()
     {
          $query = $this->db->get('tb_visi_misi');
          return $query;
     }

     public function update($post)
     {
          $params = [
               'visi_sekolah' => $post['s_visi'],
               'misi_sekolah' => $post['s_misi'],
          ];

          $this->db->where('id_visi', $post['id']);
          $this->db->update('tb_visi_misi', $params);
     }

}
