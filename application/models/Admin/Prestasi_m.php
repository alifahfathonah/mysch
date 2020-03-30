<?php defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi_m extends CI_Model
{
    public function get($id = null)
    {  
        $this->db->from('tb_prestasi');
        $this->db->order_by('tahun_prestasi', 'DESC');
        if($id != null){
            $this->db->where('id_prestasi', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($post)
    {
        $params = [
            'id_prestasi' => substr(md5(rand()), 0, 20),
            'nama_kegiatan' => $post['s_nama'],
            'nama_peserta' => $post['s_peserta'],
            'perolehan_juara' => $post['s_juara'],
            'tingkat_prestasi' => $post['s_tingkat'],
            'tahun_prestasi' => $post['s_tahun']
        ];
        $this->db->insert('tb_prestasi', $params);
    }

    public function update($post)
    {
        $params = [
            'nama_kegiatan' => $post['s_nama'],
            'nama_peserta' => $post['s_peserta'],
            'perolehan_juara' => $post['s_juara'],
            'tingkat_prestasi' => $post['s_tingkat'],
            'tahun_prestasi' => $post['s_tahun']
        ];
        $this->db->where('id_prestasi', $post['id']);
        $this->db->update('tb_prestasi', $params);
    }

    public function delete($id)
    {
         $this->db->where('id_prestasi', $id);
         $query = $this->db->delete('tb_prestasi');
         return $query;
    }

}
