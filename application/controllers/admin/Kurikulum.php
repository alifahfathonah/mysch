<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kurikulum extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/kurikulum_m');
	}

	public function index()
	{
        $query = $this->kurikulum_m->get();
        $data = [
            'page' => 'Kurikulum Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/kurikulum/index', $data);
    }

    public function add()
    {
        $kurikulum = new stdClass();
        $kurikulum->id_kurikulum = null;
        $kurikulum->keterangan_kurikulum = null;
        $kurikulum->file_kurikulum = null;

        $data = [
            'page' => 'Tambah Kurikulum  Sekolah',
            'row' => $kurikulum
        ];
        $this->template->load('admin/template', 'admin/fitur/kurikulum/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->kurikulum_m->get($id);
        $data = [
            'page' => 'Update kurikulum  Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/kurikulum/form', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {

			$config['upload_path']    = './assets/admin/img/kurikulum/';
			$config['allowed_types']  = 'jpg|png|jpeg|xlsx|docx|pdf|doc|xls|csv';
			$config['max_size']       = 20000;
			$config['file_name']       = 'kurikulum-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$post['image'] = $this->upload->data('file_name');
				$this->kurikulum_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('succes', " Data berhasil Ditambahkan");
					redirect('admin/kurikulum');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('asset/kurikulum/add');
				}
			} else {
				$this->kurikulum_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('warning', " Data berhasil Ditambahkan Namun Gambar Dokumentasi tidak di masukkan");
					redirect('asset/kurikulum');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('asset/kurikulum/add');
				}
			}
		} else if (isset($post['edit'])) {
	
			$config['upload_path']    = './assets/admin/img/kurikulum/';
			$config['allowed_types']  = 'jpg|png|jpeg|xlsx|docx|pdf|doc|xls|csv';
			$config['max_size']       = 20000;
			$config['file_name']       = 'kurikulum(rev)-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			$gambar = $this->upload->do_upload('image');
			if ($gambar == true) {
				$aset = $this->kurikulum_m->get($post['id'])->row();
				if ($aset->file_kurikulum != null) {
					$target_file = './assets/admin/img/kurikulum/'.$aset->file_kurikulum;
					unlink($target_file);
					$post['image'] = $this->upload->data('file_name');
				} else if ($aset->file_kurikulum == null) {
					$post['image'] = $this->upload->data('file_name');
				}
			} else {
				$aset = $this->kurikulum_m->get($post['id'])->row();
				$post['image'] = $aset->file_kurikulum;
			}
			$this->kurikulum_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/kurikulum');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/kurikulum/edit/'.$post['id']);
			}
		} else {
			$this->session->set_flashdata('warning', " System Error");
			redirect('admin/kurikulum');
		}
    }


    public function del($id)
    {
        $aset = $this->kurikulum_m->get($id)->row();
		if ($aset->file_kurikulum != null) {
			$target_file = './assets/admin/img/kurikulum/' . $aset->file_kurikulum;
			unlink($target_file);
		}
		$this->kurikulum_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', " Data berhasil di hapus ");
		} else {
			$this->session->set_flashdata('error', " Data gagal di hapus ");
		}
		redirect('admin/kurikulum');
    }

  
	
}
