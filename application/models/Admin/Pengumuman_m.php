<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman_m extends CI_Model
{
    public function get($id = null)
    {  
        $this->db->from('tb_pengumuman');
        if($id != null){
            $this->db->where('id_pengumuman', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($post)
    {
        $params = [
            'id_pengumuman' => substr(md5(rand()), 0, 20),
            'sumber_pengumuman' => $post['p_sumber'],
            'judul_pengumuman' => $post['p_judul'],
            'isi_pengumuman' => $post['p_isi'],
            'pemilik_pengumuman' => $this->session->userdata('name')
        ];
        $this->db->insert('tb_pengumuman', $params);
    }

    public function update($post)
    {
        $params = [
            'sumber_pengumuman' => $post['p_sumber'],
            'judul_pengumuman' => $post['p_judul'],
            'isi_pengumuman' => $post['p_isi'],
            'pemilik_pengumuman' => $this->session->userdata('name')
        ];
        $this->db->where('id_pengumuman', $post['id']);
        $this->db->update('tb_pengumuman', $params);
    }

    public function delete($id)
    {
         $this->db->where('id_pengumuman', $id);
         $query = $this->db->delete('tb_pengumuman');
         return $query;
    }

}
