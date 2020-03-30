<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kalender extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/kalender_m');
	}

	public function index()
	{
        $query = $this->kalender_m->get();
        $data = [
            'page' => 'Kalender Akademik Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/kalender/index', $data);
    }

    public function add()
    {
        $kalender = new stdClass();
        $kalender->id_kalender = null;
        $kalender->ta_kalender = null;
        $kalender->semester_kalender = null;

        $data = [
            'page' => 'Tambah Kalender Akademik Sekolah',
            'row' => $kalender
        ];
        $this->template->load('admin/template', 'admin/fitur/kalender/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->kalender_m->get($id);
        $data = [
            'page' => 'Update Kalender Akademik Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/kalender/form', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {

			$config['upload_path']    = './assets/admin/img/kalender/';
			$config['allowed_types']  = 'jpg|png|jpeg|xlsx|docx|pdf|doc|xls|csv';
			$config['max_size']       = 20000;
			$config['file_name']       = 'Jadwal-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$post['image'] = $this->upload->data('file_name');
				$this->kalender_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('succes', " Data berhasil Ditambahkan");
					redirect('admin/kalender');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('asset/kalender/add');
				}
			} else {
				$this->kalender_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('warning', " Data berhasil Ditambahkan Namun Gambar Dokumentasi tidak di masukkan");
					redirect('asset/kalender');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('asset/kalender/add');
				}
			}
		} else if (isset($post['edit'])) {
	
			$config['upload_path']    = './assets/admin/img/kalender/';
			$config['allowed_types']  = 'jpg|png|jpeg|icon';
			$config['max_size']       = 20000;
			$config['file_name']       = 'Jadwal(rev)-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			$gambar = $this->upload->do_upload('image');
			if ($gambar == true) {
				$aset = $this->kalender_m->get($post['id'])->row();
				if ($aset->file_kalender != null) {
					$target_file = './assets/admin/img/kalender/'.$aset->file_kalender;
					unlink($target_file);
					$post['image'] = $this->upload->data('file_name');
				} else if ($aset->file_kalender == null) {
					$post['image'] = $this->upload->data('file_name');
				}
			} else {
				$aset = $this->kalender_m->get($post['id'])->row();
				$post['image'] = $aset->file_kalender;
			}
			$this->kalender_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/kalender');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/kalender/edit/'.$post['id']);
			}
		} else {
			$this->session->set_flashdata('warning', " System Error");
			redirect('admin/kalender');
		}
    }


    public function del($id)
    {
        $aset = $this->kalender_m->get($id)->row();
		if ($aset->file_kalender != null) {
			$target_file = './assets/admin/img/kalender/' . $aset->file_kalender;
			unlink($target_file);
		}
		$this->kalender_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', " Data berhasil di hapus ");
		} else {
			$this->session->set_flashdata('error', " Data gagal di hapus ");
		}
		redirect('admin/kalender');
    }

  
	
}
