<?php defined('BASEPATH') or exit('No direct script access allowed');

class Ekstra_m extends CI_Model
{
    public function get($id = null)
    {  
        $this->db->from('tb_ekstra');
        $this->db->order_by('kegiatan_ekstra', 'ASC');
        if($id != null){
            $this->db->where('id_ekstra', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($post)
    {
        $params = [
            'id_ekstra' => substr(md5(rand()), 0, 20),
            'kegiatan_ekstra' => $post['e_ekstra'],
            'pembina_ekstra' => $post['e_pembina'],
            'jadwal_ekstra' => $post['e_jadwal'],
            'jam_ekstra' => $post['e_jam']
        ];
        $this->db->insert('tb_ekstra', $params);
    }

    public function update($post)
    {
        $params = [
            'kegiatan_ekstra' => $post['e_ekstra'],
            'pembina_ekstra' => $post['e_pembina'],
            'jadwal_ekstra' => $post['e_jadwal'],
            'jam_ekstra' => $post['e_jam']
        ];
        $this->db->where('id_ekstra', $post['id']);
        $this->db->update('tb_ekstra', $params);
    }

    public function delete($id)
    {
         $this->db->where('id_ekstra', $id);
         $query = $this->db->delete('tb_ekstra');
         return $query;
    }

}
