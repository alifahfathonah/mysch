<?php defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah_m extends CI_Model
{
     public function get()
     {
          $this->db->from('tb_sekolah');
          $query = $this->db->get();
          return $query;
     }

     public function profil($post)
     {
          $params = [
               'npsn_sekolah' => $post['s_npsn'],
               'nama_sekolah' => $post['s_nama'],
               'inisial_sekolah' => $post['s_inisial'],
               'alamat_sekolah' => $post['s_alamat'],
               'embed_sekolah' => $post['s_embed'],
               'kepala_sekolah' => $post['s_kepala'],
               'akreditasi_sekolah' => $post['s_akreditasi'],
               'kurikulum_sekolah' => $post['s_kurikulum'],
               'ta_sekolah' => $post['s_ta'],
               'semester_sekolah' => $post['s_semester'],
               'desc_sekolah' => $post['s_desc'],
               'telp_sekolah' => $post['s_telp'],
               'fb_sekolah' => $post['s_fb'],
               'ig_sekolah' => $post['s_ig'],
               'tw_sekolah' => $post['s_tw'],
               'ytb_sekolah' => $post['s_ytb']
          ];

          $this->db->update('tb_sekolah', $params);
     }

     public function logo($post)
     {
          $params['logo_sekolah'] = $post['image'];
          $this->db->update('tb_sekolah', $params);
     }

}