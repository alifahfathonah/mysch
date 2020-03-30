<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/siswa_m');
	}

	public function index()
	{
        $query = $this->siswa_m->get();
        $data = [
            'page' => 'Daftar Peserta Didik Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/siswa/index', $data);
    }

    public function add()
    {
		$siswa = new stdClass();
		$siswa->id_siswa = null;
		$siswa->nama_kelas = null;
		$siswa->wali_kelas = null;
		$siswa->jumlah_laki = null;
		$siswa->jumlah_perempuan = null;

        $data = [
            'page' => 'Tambah Daftar Peserta Didik Sekolah',
            'row' => $siswa
        ];
        $this->template->load('admin/template', 'admin/fitur/siswa/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->siswa_m->get($id);
        $data = [
            'page' => 'Update Daftar Peserta Didik Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/siswa/form', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {
			$this->siswa_m->insert($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Ditambahkan");
				redirect('admin/siswa');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
				redirect('asset/siswa/add');
			}
		} else if (isset($post['edit'])) {
			$this->siswa_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/siswa');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/siswa/edit/'.$post['id']);
			}
		} else {
			$this->session->set_flashdata('warning', " System Error");
			redirect('admin/siswa');
		}
    }


    public function del($id)
    {
		$this->siswa_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', " Data berhasil di hapus ");
		} else {
			$this->session->set_flashdata('error', " Data gagal di hapus ");
		}
		redirect('admin/siswa');
    }

  
	
}
