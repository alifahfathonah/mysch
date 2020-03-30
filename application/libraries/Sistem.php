<?php

class Sistem{

    public function get_user()
    {
        $ci = &get_instance();
        $ci->load->model('auth_m');
        $id = $ci->session->userdata('userid');
        $sql = $ci->auth_m->get($id);
        return $sql->row();
    }

    public function profil()
    {
        $ci = &get_instance();
        $ci->load->model('admin/sekolah_m');
        $sql = $ci->sekolah_m->get()->row();
        return $sql;
    }

    public function visitor()
    {
        $ci = &get_instance();
        $ci->db->from('tb_viwer');
        $query = $ci->db->get();
        return $query->num_rows();

    }

    public function get_krisar($all = null)
    {
        $ci = &get_instance();
        $ci->db->from('tb_krisar');
        if($all == null){
            $ci->db->where('status_krisar', 0);
        }
        $query = $ci->db->get();
        return $query;
    }

    public function get_agenda()
    {
        $ci = &get_instance();
        $ci->db->from('tb_agenda');
        $ci->db->where('tanggal_agenda >=', date('Y-m-d'));
        $query = $ci->db->get();
        return $query;
    }

    public function get_guru()
    {
        $ci = &get_instance();
        $ci->db->from('tb_staff');
        $ci->db->where('cat_staff', 1);
        $query = $ci->db->get();
        return $query;
    }

    public function get_siswa()
    {
        $ci = &get_instance();
        $ci->db->from('tb_siswa');
        $query = $ci->db->get();
        $count = 0;
        foreach ($query->result() as $key => $data) {
            $count = $count + ($data->jumlah_laki + $data->jumlah_perempuan);
        }
        return $count;
    }

    public function get_prestasi()
    {
        $ci = &get_instance();
        $ci->db->from('tb_prestasi');
        $query = $ci->db->get();
        return $query;
    }

    public function get_berita()
    {
        $ci = &get_instance();
        $ci->db->from('tb_berita');
        $ci->db->order_by('created_berita', 'DESC');
        $query = $ci->db->get();
        return $query;
    }

    public function insert_krisar()
    {
        $ci = &get_instance();
        $post = $ci->input->post(NULL, TRUE);

        if(isset($post['krisar'])){
            $nama = $post['nama'];
            $no = $post['nomor'];
            $isi = $post['isi'];
            $params = [
                'id_krisar' => substr(md5(rand()), 0, 20),
                'isi_krisar' => $nama.'-'.$no.'-'.$isi,
                'user_krisar' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
                'ip_krisar' => $ci->input->ip_address()
            ];
            $ci->db->insert('tb_krisar', $params);
            return 1;
        }
    }
}
    

?>