<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/ujian_m');
	}

	public function index()
	{
        $query = $this->ujian_m->get();
        $data = [
            'page' => 'Jadwal Ujian Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/ujian/index', $data);
    }

    public function add()
    {
        $ujian = new stdClass();
        $ujian->id_jadwal = null;
        $ujian->keterangan_jadwal = null;
        $ujian->file_jadwal = null;

        $data = [
            'page' => 'Tambah Jadwal Ujian Sekolah',
            'row' => $ujian
        ];
        $this->template->load('admin/template', 'admin/fitur/ujian/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->ujian_m->get($id);
        $data = [
            'page' => 'Update Jadwal Ujian Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/ujian/form', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {

			$config['upload_path']    = './assets/admin/img/ujian/';
			$config['allowed_types']  = 'jpg|png|jpeg|xlsx|docx|pdf|doc|xls|csv';
			$config['max_size']       = 20000;
			$config['file_name']       = 'ujian-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$post['image'] = $this->upload->data('file_name');
				$this->ujian_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('succes', " Data berhasil Ditambahkan");
					redirect('admin/ujian');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('admin/ujian/add');
				}
			} else {
				$this->ujian_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('warning', " Data berhasil Ditambahkan Namun Gambar Dokumentasi tidak di masukkan");
					redirect('admin/ujian');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('admin/ujian/add');
				}
			}
		} else if (isset($post['edit'])) {
	
			$config['upload_path']    = './assets/admin/img/ujian/';
			$config['allowed_types']  = 'jpg|png|jpeg|xlsx|docx|pdf|doc|xls|csv';
			$config['max_size']       = 20000;
			$config['file_name']       = 'ujian(rev)-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			$gambar = $this->upload->do_upload('image');
			if ($gambar == true) {
				$aset = $this->ujian_m->get($post['id'])->row();
				if ($aset->file_jadwal != null) {
					$target_file = './assets/admin/img/ujian/'.$aset->file_jadwal;
					unlink($target_file);
					$post['image'] = $this->upload->data('file_name');
				} else if ($aset->file_jadwal == null) {
					$post['image'] = $this->upload->data('file_name');
				}
			} else {
				$aset = $this->ujian_m->get($post['id'])->row();
				$post['image'] = $aset->file_jadwal;
			}
			$this->ujian_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/ujian');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/ujian/edit/'.$post['id']);
			}
		} else {
			$this->session->set_flashdata('warning', " System Error");
			redirect('admin/ujian');
		}
    }


    public function del($id)
    {
        $aset = $this->ujian_m->get($id)->row();
		if ($aset->file_jadwal != null) {
			$target_file = './assets/admin/img/ujian/' . $aset->file_jadwal;
			unlink($target_file);
		}
		$this->ujian_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', " Data berhasil di hapus ");
		} else {
			$this->session->set_flashdata('error', " Data gagal di hapus ");
		}
		redirect('admin/ujian');
    }

  
	
}
