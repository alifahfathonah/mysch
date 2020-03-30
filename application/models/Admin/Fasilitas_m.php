<?php defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas_m extends CI_Model
{
    public function get($id = null)
    {  
        $this->db->from('tb_fasilitas');
        if($id != null){
            $this->db->where('id_fasilitas', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($post)
    {
        $params = [
            'id_fasilitas' => substr(md5(rand()), 0, 20),
            'nama_fasilitas' => $post['f_nama'],
            'image_fasilitas' => $post['image'],
            'updated_fasilitas' => date('Y-m-d')
        ];
        $this->db->insert('tb_fasilitas', $params);
    }

    public function update($post)
    {
        $params = [
            'nama_fasilitas' => $post['f_nama'],
            'image_fasilitas' => $post['image'],
            'updated_fasilitas' => date('Y-m-d')
        ];
        $this->db->where('id_fasilitas', $post['id']);
        $this->db->update('tb_fasilitas', $params);
    }

    public function delete($id)
    {
         $this->db->where('id_fasilitas', $id);
         $query = $this->db->delete('tb_fasilitas');
         return $query;
    }

}
