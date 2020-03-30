<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/fasilitas_m');
	}

	public function index()
	{
        $query = $this->fasilitas_m->get();
        $data = [
            'page' => 'Daftar Fasilitas Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/fasilitas/index', $data);
    }

    public function add()
    {
        $fasilitas = new stdClass();
        $fasilitas->id_fasilitas = null;
        $fasilitas->nama_fasilitas = null;
        $fasilitas->image_fasilitas = null;
        $fasilitas->updated_fasilitas = null;

        $data = [
            'page' => 'Tambah Fasilitas Sekolah',
            'row' => $fasilitas
        ];
        $this->template->load('admin/template', 'admin/fitur/fasilitas/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->fasilitas_m->get($id);
        $data = [
            'page' => 'Update Fasilitas Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/fasilitas/form', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {

			$config['upload_path']    = './assets/admin/img/fasilitas/';
			$config['allowed_types']  = 'jpg|png|jpeg|icon';
			$config['max_size']       = 10000;
			$config['file_name']       = 'Image-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$post['image'] = $this->upload->data('file_name');
				$this->fasilitas_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('succes', " Data berhasil Ditambahkan");
					redirect('admin/fasilitas');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('admin/fasilitas/add');
				}
			} else {
				$this->fasilitas_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('warning', " Data berhasil Ditambahkan Namun Gambar Dokumentasi tidak di masukkan");
					redirect('admin/fasilitas');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('admin/fasilitas/add');
				}
			}
		} else if (isset($post['edit'])) {
	
			$config['upload_path']    = './assets/admin/img/fasilitas/';
			$config['allowed_types']  = 'jpg|png|jpeg|icon';
			$config['max_size']       = 10000;
			$config['file_name']       = 'Image-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			$gambar = $this->upload->do_upload('image');
			if ($gambar == true) {
				$aset = $this->fasilitas_m->get($post['id'])->row();
				if ($aset->image_fasilitas != null) {
					$target_file = './assets/admin/img/fasilitas/'.$aset->image_fasilitas;
					unlink($target_file);
					$post['image'] = $this->upload->data('file_name');
				} else if ($aset->image_fasilitas == null) {
					$post['image'] = $this->upload->data('file_name');
				}
			} else {
				$aset = $this->fasilitas_m->get($post['id'])->row();
				$post['image'] = $aset->image_fasilitas;
			}
			$this->fasilitas_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/fasilitas');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/fasilitas/edit/'.$post['id']);
			}
		} else {
			$this->session->set_flashdata('warning', " System Error");
			redirect('admin/fasilitas');
		}
    }


    public function del($id)
    {
        $aset = $this->fasilitas_m->get($id)->row();
		if ($aset->image_fasilitas != null) {
			$target_file = './assets/admin/img/fasilitas/' . $aset->image_fasilitas;
			unlink($target_file);
		}
		$this->fasilitas_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', " Data berhasil di hapus ");
		} else {
			$this->session->set_flashdata('error', " Data gagal di hapus ");
		}
		redirect('admin/fasilitas');
    }

  
	
}
