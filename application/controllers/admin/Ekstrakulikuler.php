<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ekstrakulikuler extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/ekstra_m');
	}

	public function index()
	{
        $query = $this->ekstra_m->get();
        $data = [
            'page' => 'Daftar Ekstrakulikuler Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/ekstra/index', $data);
    }

    public function add()
    {
		$ekstra = new stdClass();
		$ekstra->id_ekstra = null;
		$ekstra->kegiatan_ekstra = null;
		$ekstra->jadwal_ekstra = null;
		$ekstra->jam_ekstra = null;
		$ekstra->pembina_ekstra = null;

        $data = [
            'page' => 'Tambah Ekstrakulikuler Sekolah',
            'row' => $ekstra
        ];
        $this->template->load('admin/template', 'admin/fitur/ekstra/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->ekstra_m->get($id);
        $data = [
            'page' => 'Update Ekstrakulikuler Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/ekstra/form', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {
			$this->ekstra_m->insert($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Ditambahkan");
				redirect('admin/ekstrakulikuler');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
				redirect('asset/ekstra/add');
			}
		} else if (isset($post['edit'])) {
			$this->ekstra_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/ekstrakulikuler');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/ekstra/edit/'.$post['id']);
			}
		} else {
			$this->session->set_flashdata('warning', " System Error");
			redirect('admin/ekstrakulikuler');
		}
    }


    public function del($id)
    {
		$this->ekstra_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', " Data berhasil di hapus ");
		} else {
			$this->session->set_flashdata('error', " Data gagal di hapus ");
		}
		redirect('admin/ekstrakulikuler');
    }

  
	
}
