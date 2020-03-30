<?php defined('BASEPATH') or exit('No direct script access allowed');

class Sambutan_m extends CI_Model
{
     public function get()
     {
          $this->db->from('tb_sambutan');
          $query = $this->db->get();
          return $query;
     }

     public function update($post)
     {
          $params = [
               'isi_sambutan' => $post['s_isi'],
               'image_sambutan' => $post['image'],
          ];

          $this->db->where('id_sambutan', $post['id']);
          $this->db->update('tb_sambutan', $params);
     }

}
