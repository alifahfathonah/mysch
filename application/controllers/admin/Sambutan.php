<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sambutan extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/sambutan_m');
	}

	public function index()
	{
        $query = $this->sambutan_m->get()->row();
        $data = [
            'page' => 'Sambutan Kepala Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/sambutan/index', $data);
    }
    
    public function update()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['update'])) {
			$config['upload_path']    = './assets/admin/img/sambutan/';
			$config['allowed_types']  = 'jpg|png|jpeg|icon';
			$config['max_size']       = 10000;
			$config['file_name']       = 'Image-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			$gambar = $this->upload->do_upload('image');
			if ($gambar == true) {
				$sql = $this->sambutan_m->get($post['id'])->row();
				if ($sql->image_sambutan != null) {
					$target_file = './assets/admin/img/sambutan/' . $sql->image_sambutan;
					unlink($target_file);
					$post['image'] = $this->upload->data('file_name');
				} else if ($sql->image_sambutan == null) {
					$post['image'] = $this->upload->data('file_name');
				}
			} else {
				$sql = $this->sambutan_m->get($post['id'])->row();
				$post['image'] = $sql->image_sambutan;
			}
			$this->sambutan_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/sambutan');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/sambutan');
			}
		} else {
			$this->session->set_flashdata('warning', " System Error (Pastikan data yang diisi sesuai format)");
			redirect('admin/sambutan');
		}
    }

	
}
