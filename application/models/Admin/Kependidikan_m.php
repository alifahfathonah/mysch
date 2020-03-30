<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kependidikan_m extends CI_Model
{
    public function get($id = null)
    {  
        $this->db->from('tb_staff');
        $this->db->where('cat_staff', 2);
        if($id != null){
            $this->db->where('id_staff', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($post)
    {
        $params = [
            'id_staff' => substr(md5(rand()), 0, 20),
            'cat_staff' => 2,
            'nip_staff' => $post['p_nip'],
            'nama_staff' => $post['p_nama'],
            'jabatan_staff' => $post['p_jabatan'],
            'keilmuan_staff' => $post['p_keilmuan'],
            'pendidikan_staff' => $post['p_pendidikan'],
            'image_staff' => $post['image']
        ];
        $this->db->insert('tb_staff', $params);
    }

    public function update($post)
    {
        $params = [
            'nip_staff' => $post['p_nip'],
            'nama_staff' => $post['p_nama'],
            'jabatan_staff' => $post['p_jabatan'],
            'keilmuan_staff' => $post['p_keilmuan'],
            'pendidikan_staff' => $post['p_pendidikan'],
            'image_staff' => $post['image']
        ];
        $this->db->where('id_staff', $post['id']);
        $this->db->update('tb_staff', $params);
    }

    public function delete($id)
    {
         $this->db->where('id_staff', $id);
         $query = $this->db->delete('tb_staff');
         return $query;
    }

}
