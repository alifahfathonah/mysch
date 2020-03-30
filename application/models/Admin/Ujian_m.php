<?php defined('BASEPATH') or exit('No direct script access allowed');

class Ujian_m extends CI_Model
{
    public function get($id = null)
    {  
        $this->db->from('tb_jadwal');
        $this->db->where('kategori_jadwal', 2);
        if($id != null){
            $this->db->where('id_jadwal', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($post)
    {
        $params = [
            'id_jadwal' => substr(md5(rand()), 0, 20),
            'kategori_jadwal' => 2,
            'keterangan_jadwal' => $post['u_ket'],
            'file_jadwal' => $post['image']
        ];
        $this->db->insert('tb_jadwal', $params);
    }

    public function update($post)
    {
        $params = [
            'keterangan_jadwal' => $post['u_ket'],
            'file_jadwal' => $post['image']
        ];
        $this->db->where('id_jadwal', $post['id']);
        $this->db->update('tb_jadwal', $params);
    }

    public function delete($id)
    {
         $this->db->where('id_jadwal', $id);
         $query = $this->db->delete('tb_jadwal');
         return $query;
    }

}
