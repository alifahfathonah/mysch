<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kurikulum_m extends CI_Model
{
    public function get($id = null)
    {  
        $this->db->from('tb_kurikulum');
        if($id != null){
            $this->db->where('id_kurikulum', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($post)
    {
        $params = [
            'id_kurikulum' => substr(md5(rand()), 0, 20),
            'keterangan_kurikulum' => $post['k_ket'],
            'file_kurikulum' => $post['image']
        ];
        $this->db->insert('tb_kurikulum', $params);
    }

    public function update($post)
    {
        $params = [
            'keterangan_kurikulum' => $post['k_ket'],
            'file_kurikulum' => $post['image']
        ];
        $this->db->where('id_kurikulum', $post['id']);
        $this->db->update('tb_kurikulum', $params);
    }

    public function delete($id)
    {
         $this->db->where('id_kurikulum', $id);
         $query = $this->db->delete('tb_kurikulum');
         return $query;
    }

}
