<?php defined('BASEPATH') or exit('No direct script access allowed');

class Berita_m extends CI_Model
{
    public function get($id = null)
    {  
        $this->db->from('tb_berita');
        if($id != null){
            $this->db->where('id_berita', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($post)
    {
        $params = [
            'id_berita' => substr(md5(rand()), 0, 20),
            'judul_berita' => $post['b_judul'],
            'isi_berita' => $post['b_isi'],
            'author_berita' => $this->session->userdata('name')
        ];
        if($post['image'] != null){
            $params['image_berita'] = $post['image'];
        }
        $this->db->insert('tb_berita', $params);
    }

    public function update($post)
    {
        $params = [
            'judul_berita' => $post['b_judul'],
            'isi_berita' => $post['b_isi'],
            'author_berita' => $this->session->userdata('name'),
            'image_berita' => $post['image'],
            'updated_berita' => date('Y-m-d H:i:s')
        ];
        $this->db->where('id_berita', $post['id']);
        $this->db->update('tb_berita', $params);
    }

    public function delete($id)
    {
         $this->db->where('id_berita', $id);
         $query = $this->db->delete('tb_berita');
         return $query;
    }

}
