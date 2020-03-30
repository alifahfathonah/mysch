<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kependidikan extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/kependidikan_m');
	}

	public function index()
	{
        $query = $this->kependidikan_m->get();
        $data = [
            'page' => 'Daftar Tenaga Kependidikan Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/kependidikan/index', $data);
    }

    public function add()
    {
		$kependidikan = new stdClass();
		$kependidikan->id_staff = null;
		$kependidikan->nip_staff = null;
		$kependidikan->nama_staff = null;
		$kependidikan->jabatan_staff = null;
		$kependidikan->keilmuan_staff = null;
		$kependidikan->pendidikan_staff = null;       

        $data = [
            'page' => 'Tambah Tenaga Kependidikan Sekolah',
            'row' => $kependidikan
        ];
        $this->template->load('admin/template', 'admin/fitur/kependidikan/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->kependidikan_m->get($id);
        $data = [
            'page' => 'Update Tenaga Kependidikan Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/kependidikan/form', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {

			$config['upload_path']    = './assets/admin/img/kependidikan/';
			$config['allowed_types']  = 'jpg|png|jpeg|icon';
			$config['max_size']       = 20000;
			$config['file_name']       = 'kependidikan-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$post['image'] = $this->upload->data('file_name');
				$this->kependidikan_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('succes', " Data berhasil Ditambahkan");
					redirect('admin/kependidikan');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('asset/kependidikan/add');
				}
			} else {
				$this->kependidikan_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('warning', " Data berhasil Ditambahkan Namun Foto tidak di masukkan");
					redirect('asset/kependidikan');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('asset/kependidikan/add');
				}
			}
		} else if (isset($post['edit'])) {
	
			$config['upload_path']    = './assets/admin/img/kependidikan/';
			$config['allowed_types']  = 'jpg|png|jpeg|xlsx|docx|pdf|doc|xls|csv';
			$config['max_size']       = 20000;
			$config['file_name']       = 'kependidikan(rev)-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			$gambar = $this->upload->do_upload('image');
			if ($gambar == true) {
				$aset = $this->kependidikan_m->get($post['id'])->row();
				if ($aset->image_staff != null) {
					$target_file = './assets/admin/img/kependidikan/'.$aset->image_staff;
					unlink($target_file);
					$post['image'] = $this->upload->data('file_name');
				} else if ($aset->image_staff == null) {
					$post['image'] = $this->upload->data('file_name');
				}
			} else {
				$aset = $this->kependidikan_m->get($post['id'])->row();
				$post['image'] = $aset->image_staff;
			}
			$this->kependidikan_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/kependidikan');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/kependidikan/edit/'.$post['id']);
			}
		} else {
			$this->session->set_flashdata('warning', " System Error");
			redirect('admin/kependidikan');
		}
    }


    public function del($id)
    {
        $aset = $this->kependidikan_m->get($id)->row();
		if ($aset->image_staff != null) {
			$target_file = './assets/admin/img/kependidikan/' . $aset->image_staff;
			unlink($target_file);
		}
		$this->kependidikan_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', " Data berhasil di hapus ");
		} else {
			$this->session->set_flashdata('error', " Data gagal di hapus ");
		}
		redirect('admin/kependidikan');
    }

  
	
}
