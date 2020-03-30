<?php defined('BASEPATH') or exit('No direct script access allowed');

class Galeri_m extends CI_Model
{
    public function get($id = null)
    {  
        $this->db->from('tb_galeri');
        if($id != null){
            $this->db->where('id_galeri', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($post)
    {
        $params = [
            'id_galeri' => substr(md5(rand()), 0, 20),
            'judul_galeri' => $post['a_judul'],
            'foto_galeri' => $post['image'],
        ];
        if($post['image'] != null){
            $params['foto_galeri'] = $post['image'];
        }
        $this->db->insert('tb_galeri', $params);
    }

    public function update($post)
    {
        $params = [
            'judul_galeri' => $post['a_judul'],
            'foto_galeri' => $post['image'],
            'updated_galeri' => date('Y-m-d H:i:s')
        ];
        $this->db->where('id_galeri', $post['id']);
        $this->db->update('tb_galeri', $params);
    }

    public function delete($id)
    {
        $this->db->where('id_galeri', $id);
        $query = $this->db->delete('tb_galeri');
        return $query;
    }

    public function search($keyword)
    {   
        $this->db->from('tb_galeri');
        $this->db->like('judul_galeri', $keyword);
        $result = $this->db->get(); 
        return $result; 
    }

}
