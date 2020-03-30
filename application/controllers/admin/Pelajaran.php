<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/pelajaran_m');
	}

	public function index()
	{
        $query = $this->pelajaran_m->get();
        $data = [
            'page' => 'Jadwal Pelajaran Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/pelajaran/index', $data);
    }

    public function add()
    {
        $pelajaran = new stdClass();
        $pelajaran->id_jadwal = null;
        $pelajaran->keterangan_jadwal = null;
        $pelajaran->file_jadwal = null;

        $data = [
            'page' => 'Tambah Jadwal Pelajaran Sekolah',
            'row' => $pelajaran
        ];
        $this->template->load('admin/template', 'admin/fitur/pelajaran/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->pelajaran_m->get($id);
        $data = [
            'page' => 'Update Jadwal Pelajaran Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/pelajaran/form', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {

			$config['upload_path']    = './assets/admin/img/pelajaran/';
			$config['allowed_types']  = 'jpg|png|jpeg|xlsx|docx|pdf|doc|xls|csv';
			$config['max_size']       = 20000;
			$config['file_name']       = 'Pelajaran-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$post['image'] = $this->upload->data('file_name');
				$this->pelajaran_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('succes', " Data berhasil Ditambahkan");
					redirect('admin/pelajaran');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('asset/pelajaran/add');
				}
			} else {
				$this->pelajaran_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('warning', " Data berhasil Ditambahkan Namun Gambar Dokumentasi tidak di masukkan");
					redirect('asset/pelajaran');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('asset/pelajaran/add');
				}
			}
		} else if (isset($post['edit'])) {
	
			$config['upload_path']    = './assets/admin/img/pelajaran/';
			$config['allowed_types']  = 'jpg|png|jpeg|xlsx|docx|pdf|doc|xls|csv';
			$config['max_size']       = 20000;
			$config['file_name']       = 'Pelajaran(rev)-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			$gambar = $this->upload->do_upload('image');
			if ($gambar == true) {
				$aset = $this->pelajaran_m->get($post['id'])->row();
				if ($aset->file_jadwal != null) {
					$target_file = './assets/admin/img/pelajaran/'.$aset->file_jadwal;
					unlink($target_file);
					$post['image'] = $this->upload->data('file_name');
				} else if ($aset->file_jadwal == null) {
					$post['image'] = $this->upload->data('file_name');
				}
			} else {
				$aset = $this->pelajaran_m->get($post['id'])->row();
				$post['image'] = $aset->file_jadwal;
			}
			$this->pelajaran_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/pelajaran');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/pelajaran/edit/'.$post['id']);
			}
		} else {
			$this->session->set_flashdata('warning', " System Error");
			redirect('admin/pelajaran');
		}
    }


    public function del($id)
    {
        $aset = $this->pelajaran_m->get($id)->row();
		if ($aset->file_jadwal != null) {
			$target_file = './assets/admin/img/pelajaran/' . $aset->file_jadwal;
			unlink($target_file);
		}
		$this->pelajaran_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', " Data berhasil di hapus ");
		} else {
			$this->session->set_flashdata('error', " Data gagal di hapus ");
		}
		redirect('admin/pelajaran');
    }

  
	
}
