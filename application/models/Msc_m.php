<?php defined('BASEPATH') or exit('No direct script access allowed');

class Msc_m extends CI_Model
{
    public function get()
    {
        $query = $this->db->get('tb_sistem');
        return $query;
    }

    public function auth_sistem($pass)
    {
        $this->db->from('tb_sistem');
        $this->db->where('pass_sistem', sha1($pass));
        $query = $this->db->get();
        return $query;
    }

    public function update($post)
    {
        $params['name_sistem'] = $post['s_name'];
        
        if($post['s_mode'] != null){
            $params['mode_sistem'] = $post['s_mode'];
        }
        if($post['s_pass'] != null){
            $params['pass_sistem'] = sha1($post['s_pass']);
        }

        $this->db->where('id_sistem', $post['id']);
        $this->db->update('tb_sistem', $params);
    }

    public function insert_viwer($agent, $mac)
    {
        $params = [
            'id_viwer' =>  substr(md5(rand()), 0, 20),
            'user_name' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
            'ip_viwer' => $this->input->ip_address(),
            'macadd_viwer' => $mac,
            'os_viwer' => $this->agent->platform(),
            'browser_viwer' => $agent
        ];
        $this->db->insert('tb_viwer', $params);
    }

}
