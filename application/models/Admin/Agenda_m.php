<?php defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_m extends CI_Model
{
    public function get($id = null)
    {  
        $this->db->from('tb_agenda');
        if($id != null){
            $this->db->where('id_agenda', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($post)
    {
        $params = [
            'id_agenda' => substr(md5(rand()), 0, 20),
            'nama_agenda' => $post['a_nama'],
            'pelaksana_agenda' => $post['a_pelaksana'],
            'tanggal_agenda' => $post['a_tanggal'],
        ];
        if($post['image'] != null){
            $params['pamflet_agenda'] = $post['image'];
        }
        $this->db->insert('tb_agenda', $params);
    }

    public function update($post)
    {
        $params = [
            'nama_agenda' => $post['a_nama'],
            'pelaksana_agenda' => $post['a_pelaksana'],
            'tanggal_agenda' => $post['a_tanggal'],
            'pamflet_agenda' => $post['image'],
            'updated_agenda' => date('Y-m-d')
        ];
        $this->db->where('id_agenda', $post['id']);
        $this->db->update('tb_agenda', $params);
    }

    public function delete($id)
    {
         $this->db->where('id_agenda', $id);
         $query = $this->db->delete('tb_agenda');
         return $query;
    }

}
