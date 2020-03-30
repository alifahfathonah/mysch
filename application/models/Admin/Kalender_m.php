<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kalender_m extends CI_Model
{
    public function get($id = null)
    {  
        $this->db->from('tb_kalender');
        if($id != null){
            $this->db->where('id_kalender', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($post)
    {
        $params = [
            'id_kalender' => substr(md5(rand()), 0, 20),
            'ta_kalender' => $post['k_ta1'].'/'.$post['k_ta2'],
            'semester_kalender' => $post['k_semester'],
            'file_kalender' => $post['image']
        ];
        $this->db->insert('tb_kalender', $params);
    }

    public function update($post)
    {
        $params = [
            'ta_kalender' => $post['k_ta1'].'/'.$post['k_ta2'],
            'semester_kalender' => $post['k_semester'],
            'file_kalender' => $post['image']
        ];
        $this->db->where('id_kalender', $post['id']);
        $this->db->update('tb_kalender', $params);
    }

    public function delete($id)
    {
         $this->db->where('id_kalender', $id);
         $query = $this->db->delete('tb_kalender');
         return $query;
    }

}
