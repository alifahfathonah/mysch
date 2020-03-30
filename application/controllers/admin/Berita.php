<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/berita_m');
	}

	public function index()
	{
        $query = $this->berita_m->get();
        $data = [
            'page' => 'Daftar Berita Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/berita/index', $data);
    }

    public function add()
    {
        $berita = new stdClass();
        $berita->id_berita = null;
        $berita->judul_berita = null;
		$berita->isi_berita = null;

        $data = [
            'page' => 'Tambah Berita Sekolah',
            'row' => $berita
        ];
        $this->template->load('admin/template', 'admin/fitur/berita/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->berita_m->get($id);
        $data = [
            'page' => 'Update Berita Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/berita/form', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {

			$config['upload_path']    = './assets/admin/img/berita/';
			$config['allowed_types']  = 'jpg|png|jpeg|icon';
			$config['max_size']       = 10000;
			$config['file_name']       = 'Berita-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$post['image'] = $this->upload->data('file_name');
				$this->berita_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('succes', " Data berhasil Ditambahkan");
					redirect('admin/berita');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('admin/berita/add');
				}
			} else {
				$this->berita_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('warning', " Data berhasil Ditambahkan Namun Gambar Dokumentasi tidak di masukkan");
					redirect('admin/berita');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('admin/berita/add');
				}
			}
		} else if (isset($post['edit'])) {
	
			$config['upload_path']    = './assets/admin/img/berita/';
			$config['allowed_types']  = 'jpg|png|jpeg|icon';
			$config['max_size']       = 10000;
			$config['file_name']       = 'Berita-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			$gambar = $this->upload->do_upload('image');
			if ($gambar == true) {
				$aset = $this->berita_m->get($post['id'])->row();
				if ($aset->image_berita != null) {
					$target_file = './assets/admin/img/berita/'.$aset->image_berita;
					unlink($target_file);
					$post['image'] = $this->upload->data('file_name');
				} else if ($aset->image_berita == null) {
					$post['image'] = $this->upload->data('file_name');
				}
			} else {
				$aset = $this->berita_m->get($post['id'])->row();
				$post['image'] = $aset->image_berita;
			}
			$this->berita_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/berita');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/berita/edit/'.$post['id']);
			}
		} else {
			$this->session->set_flashdata('warning', " System Error");
			redirect('admin/berita');
		}
    }


    public function del($id)
    {
        $aset = $this->berita_m->get($id)->row();
		if ($aset->image_berita != null) {
			$target_file = './assets/admin/img/berita/' . $aset->image_berita;
			unlink($target_file);
		}
		$this->berita_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', " Data berhasil di hapus ");
		} else {
			$this->session->set_flashdata('error', " Data gagal di hapus ");
		}
		redirect('admin/berita');
    }

  
	
}
