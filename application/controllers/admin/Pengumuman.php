<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/pengumuman_m');
	}

	public function index()
	{
        $query = $this->pengumuman_m->get();
        $data = [
            'page' => 'Daftar Pengumuman Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/pengumuman/index', $data);
    }

    public function add()
    {
		$pengumuman = new stdClass();
		$pengumuman->id_pengumuman = null;
		$pengumuman->sumber_pengumuman = null;
		$pengumuman->judul_pengumuman = null;
		$pengumuman->isi_pengumuman = null;

        $data = [
            'page' => 'Tambah Pengumuman Sekolah',
            'row' => $pengumuman
        ];
        $this->template->load('admin/template', 'admin/fitur/pengumuman/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->pengumuman_m->get($id);
        $data = [
            'page' => 'Update Pengumuman Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/pengumuman/form', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {
			$this->pengumuman_m->insert($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Ditambahkan");
				redirect('admin/pengumuman');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
				redirect('asset/pengumuman/add');
			}
		} else if (isset($post['edit'])) {
			$this->pengumuman_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/pengumuman');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/pengumuman/edit/'.$post['id']);
			}
		} else {
			$this->session->set_flashdata('warning', " System Error");
			redirect('admin/Pengumuman');
		}
    }


    public function del($id)
    {
		$this->pengumuman_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', " Data berhasil di hapus ");
		} else {
			$this->session->set_flashdata('error', " Data gagal di hapus ");
		}
		redirect('admin/Pengumuman');
    }

  
	
}
