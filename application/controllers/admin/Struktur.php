<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/struktur_m');
	}

	public function index()
	{
        $query = $this->struktur_m->get()->row();
        $data = [
            'page' => 'Struktur Organisasi Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/struktur/index', $data);
    }
    
    public function update()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['update'])) {

			$config['upload_path']    = './assets/admin/img/struktur/';
			$config['allowed_types']  = 'jpg|png|jpeg|icon';
			$config['max_size']       = 10000;
			$config['file_name']       = 'Image-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			$gambar = $this->upload->do_upload('image');
			if ($gambar == true) {
				$sql = $this->struktur_m->get()->row();
				if ($sql->struktur_organisasi != null) {
					$target_file = './assets/admin/img/struktur/' . $sql->struktur_organisasi;
					unlink($target_file);
					$post['image'] = $this->upload->data('file_name');
				} else if ($sql->struktur_organisasi == null) {
					$post['image'] = $this->upload->data('file_name');
				}
			} else {
				$sql = $this->struktur_m->get()->row();
				$post['image'] = $sql->struktur_organisasi;
			}
			$this->struktur_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/struktur');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/struktur');
			}
		} else {
			$this->session->set_flashdata('warning', " System Error (Pastikan data yang diisi sesuai format)");
			redirect('admin/struktur');
		}
    }

	
}
