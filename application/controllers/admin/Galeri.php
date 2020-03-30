<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/galeri_m');
	}

	public function index()
	{
		if (@$this->input->post('search', TRUE)) {
			$keyword = $this->input->post('key',TRUE);
			$query = $this->galeri_m->search($keyword);
		}else{
			$query = $this->galeri_m->get();
		}
        $data = [
            'page' => 'Galeri Kegiatan Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/galeri/index', $data);
	}

    public function add()
    {
        $galeri = new stdClass();
        $galeri->id_galeri = null;
		$galeri->judul_galeri = null;
		
        $data = [
            'page' => 'Tambah Galeri Kegiatan Sekolah',
            'row' => $galeri
        ];
        $this->template->load('admin/template', 'admin/fitur/galeri/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->galeri_m->get($id);
        $data = [
            'page' => 'Update Galeri Kegiatan Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/galeri/form', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {

			$config['upload_path']    = './assets/galeri/';
			$config['allowed_types']  = 'jpg|png|jpeg|icon';
			$config['max_size']       = 10000;
			$config['file_name']       = 'galeri-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$post['image'] = $this->upload->data('file_name');
				$this->galeri_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('succes', " Data berhasil Ditambahkan");
					redirect('admin/galeri');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('admin/galeri/add');
				}
			} else {
				$this->galeri_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('warning', " Data berhasil Ditambahkan Namun Gambar Dokumentasi tidak di masukkan");
					redirect('admin/galeri');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('admin/galeri/add');
				}
			}
		} else if (isset($post['edit'])) {
	
			$config['upload_path']    = './assets/galeri/';
			$config['allowed_types']  = 'jpg|png|jpeg|icon';
			$config['max_size']       = 10000;
			$config['file_name']       = 'Image-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			$gambar = $this->upload->do_upload('image');
			if ($gambar == true) {
				$aset = $this->galeri_m->get($post['id'])->row();
				if ($aset->foto_galeri != null) {
					$target_file = './assets/galeri/'.$aset->foto_galeri;
					unlink($target_file);
					$post['image'] = $this->upload->data('file_name');
				} else if ($aset->foto_galeri == null) {
					$post['image'] = $this->upload->data('file_name');
				}
			} else {
				$aset = $this->galeri_m->get($post['id'])->row();
				$post['image'] = $aset->foto_galeri;
			}
			$this->galeri_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/galeri');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/galeri/edit/'.$post['id']);
			}
		} else {
			$this->session->set_flashdata('warning', " System Error");
			redirect('admin/galeri');
		}
    }


    public function del($id)
    {
        $aset = $this->galeri_m->get($id)->row();
		if ($aset->foto_galeri != null) {
			$target_file = './assets/galeri/' . $aset->foto_galeri;
			unlink($target_file);
		}
		$this->galeri_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', " Data berhasil di hapus ");
		} else {
			$this->session->set_flashdata('error', " Data gagal di hapus ");
		}
		redirect('admin/galeri');
    }

  
	
}
