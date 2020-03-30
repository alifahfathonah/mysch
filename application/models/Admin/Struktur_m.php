<?php defined('BASEPATH') or exit('No direct script access allowed');

class Struktur_m extends CI_Model
{
    public function get()
    {  
        $this->db->select('struktur_organisasi');
        $this->db->from('tb_sekolah');
        $query = $this->db->get();
        return $query;
    }

    public function update($post)
    {
        $params['struktur_organisasi'] = $post['image'];
        $this->db->update('tb_sekolah', $params);
    }

}
