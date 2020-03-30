<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

    function __construct()
	{
		parent::__construct();
        check_login();
        $this->load->model('admin/sekolah_m');
	}

	public function index()
	{
        $query = $this->sekolah_m->get();
        $data = [
            'page' => 'Rincian Profil Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/sekolah/index', $data);
    }

    public function logo()
    {
        $query = $this->sekolah_m->get();
        $data = [
            'page' => 'Logo Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/sekolah/logo', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['profil'])) {
			$this->sekolah_m->profil($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/sekolah');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/sekolah');
			}
		} else if(isset($post['logo'])){
            $config['upload_path']    = './assets/admin/img/logo/';
			$config['allowed_types']  = 'jpg|png|jpeg|icon|svg';
			$config['max_size']       = 10000;
			$config['file_name']       = 'logo-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			$gambar = $this->upload->do_upload('image');
			if ($gambar == true) {
				$sql = $this->sekolah_m->get()->row();
				if ($sql->logo_sekolah != null) {
					$target_file = './assets/admin/img/logo/' . $sql->logo_sekolah;
					unlink($target_file);
					$post['image'] = $this->upload->data('file_name');
				} else if ($sql->logo_sekolah == null) {
					$post['image'] = $this->upload->data('file_name');
				}
			} else {
				$sql = $this->sekolah_m->get($post['id'])->row();
				$post['image'] = $sql->logo_sekolah;
			}
			$this->sekolah_m->logo($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/sekolah/logo');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/sekolah/logo');
			}
        }else {
			$this->session->set_flashdata('warning', " System Error (Pastikan data yang diisi sesuai format)");
			redirect('admin/sekolah');
		}
    }

	
}
