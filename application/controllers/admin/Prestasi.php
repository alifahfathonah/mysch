<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/prestasi_m');
	}

	public function index()
	{
        $query = $this->prestasi_m->get();
        $data = [
            'page' => 'Daftar Prestasi Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/prestasi/index', $data);
    }

    public function add()
    {
		$prestasi = new stdClass();
		$prestasi->id_prestasi = null;
		$prestasi->nama_kegiatan = null;
		$prestasi->nama_peserta = null;
		$prestasi->perolehan_juara = null;
		$prestasi->tingkat_prestasi = null;
		$prestasi->tahun_prestasi = null;

        $data = [
            'page' => 'Tambah Prestasi Sekolah',
            'row' => $prestasi
        ];
        $this->template->load('admin/template', 'admin/fitur/prestasi/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->prestasi_m->get($id);
        $data = [
            'page' => 'Update Prestasi Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/prestasi/form', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {
			$this->prestasi_m->insert($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Ditambahkan");
				redirect('admin/prestasi');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
				redirect('asset/prestasi/add');
			}
		} else if (isset($post['edit'])) {
			$this->prestasi_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/prestasi');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/prestasi/edit/'.$post['id']);
			}
		} else {
			$this->session->set_flashdata('warning', " System Error");
			redirect('admin/prestasi');
		}
    }


    public function del($id)
    {
		$this->prestasi_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', " Data berhasil di hapus ");
		} else {
			$this->session->set_flashdata('error', " Data gagal di hapus ");
		}
		redirect('admin/prestasi');
    }

  
	
}
