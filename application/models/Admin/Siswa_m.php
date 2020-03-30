<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_m extends CI_Model
{
    public function get($id = null)
    {  
        $this->db->from('tb_siswa');
        $this->db->order_by('nama_kelas', 'ASC');
        if($id != null){
            $this->db->where('id_siswa', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($post)
    {
        $params = [
            'id_siswa' => substr(md5(rand()), 0, 20),
            'nama_kelas' => $post['s_nama'],
            'wali_kelas' => $post['s_wali'],
            'jumlah_laki' => $post['s_laki'],
            'jumlah_perempuan' => $post['s_perempuan']
        ];
        $this->db->insert('tb_siswa', $params);
    }

    public function update($post)
    {
        $params = [
            'nama_kelas' => $post['s_nama'],
            'wali_kelas' => $post['s_wali'],
            'jumlah_laki' => $post['s_laki'],
            'jumlah_perempuan' => $post['s_perempuan']
        ];
        $this->db->where('id_siswa', $post['id']);
        $this->db->update('tb_siswa', $params);
    }

    public function delete($id)
    {
         $this->db->where('id_siswa', $id);
         $query = $this->db->delete('tb_siswa');
         return $query;
    }

}
