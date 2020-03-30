<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidik extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/pendidik_m');
	}

	public function index()
	{
        $query = $this->pendidik_m->get();
        $data = [
            'page' => 'Daftar Pendidik Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/pendidik/index', $data);
    }

    public function add()
    {
		$pendidik = new stdClass();
		$pendidik->id_staff = null;
		$pendidik->nip_staff = null;
		$pendidik->nama_staff = null;
		$pendidik->jabatan_staff = null;
		$pendidik->keilmuan_staff = null;
		$pendidik->pendidikan_staff = null;       

        $data = [
            'page' => 'Tambah Daftar Pendidik Sekolah',
            'row' => $pendidik
        ];
        $this->template->load('admin/template', 'admin/fitur/pendidik/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->pendidik_m->get($id);
        $data = [
            'page' => 'Update Daftar Pendidik Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/pendidik/form', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {

			$config['upload_path']    = './assets/admin/img/pendidik/';
			$config['allowed_types']  = 'jpg|png|jpeg|icon';
			$config['max_size']       = 20000;
			$config['file_name']       = 'pendidik-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$post['image'] = $this->upload->data('file_name');
				$this->pendidik_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('succes', " Data berhasil Ditambahkan");
					redirect('admin/pendidik');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('asset/pendidik/add');
				}
			} else {
				$this->pendidik_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('warning', " Data berhasil Ditambahkan Namun Foto tidak di masukkan");
					redirect('asset/pendidik');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('asset/pendidik/add');
				}
			}
		} else if (isset($post['edit'])) {
	
			$config['upload_path']    = './assets/admin/img/pendidik/';
			$config['allowed_types']  = 'jpg|png|jpeg|xlsx|docx|pdf|doc|xls|csv';
			$config['max_size']       = 20000;
			$config['file_name']       = 'pendidik(rev)-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			$gambar = $this->upload->do_upload('image');
			if ($gambar == true) {
				$aset = $this->pendidik_m->get($post['id'])->row();
				if ($aset->image_staff != null) {
					$target_file = './assets/admin/img/pendidik/'.$aset->image_staff;
					unlink($target_file);
					$post['image'] = $this->upload->data('file_name');
				} else if ($aset->image_staff == null) {
					$post['image'] = $this->upload->data('file_name');
				}
			} else {
				$aset = $this->pendidik_m->get($post['id'])->row();
				$post['image'] = $aset->image_staff;
			}
			$this->pendidik_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/pendidik');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/pendidik/edit/'.$post['id']);
			}
		} else {
			$this->session->set_flashdata('warning', " System Error");
			redirect('admin/pendidik');
		}
    }


    public function del($id)
    {
        $aset = $this->pendidik_m->get($id)->row();
		if ($aset->image_staff != null) {
			$target_file = './assets/admin/img/pendidik/' . $aset->image_staff;
			unlink($target_file);
		}
		$this->pendidik_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', " Data berhasil di hapus ");
		} else {
			$this->session->set_flashdata('error', " Data gagal di hapus ");
		}
		redirect('admin/pendidik');
    }

  
	
}
