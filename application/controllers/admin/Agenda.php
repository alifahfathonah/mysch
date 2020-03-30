<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/agenda_m');
	}

	public function index()
	{
        $query = $this->agenda_m->get();
        $data = [
            'page' => 'Daftar Agenda Sekolah',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/fitur/agenda/index', $data);
    }

    public function add()
    {
        $agenda = new stdClass();
        $agenda->id_agenda = null;
        $agenda->nama_agenda = null;
		$agenda->pelaksana_agenda = null;
		$agenda->tanggal_agenda = null;
        $agenda->updated_agenda = null;

        $data = [
            'page' => 'Tambah Agenda Sekolah',
            'row' => $agenda
        ];
        $this->template->load('admin/template', 'admin/fitur/agenda/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->agenda_m->get($id);
        $data = [
            'page' => 'Update Agenda Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/agenda/form', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {

			$config['upload_path']    = './assets/admin/img/agenda/';
			$config['allowed_types']  = 'jpg|png|jpeg|icon';
			$config['max_size']       = 10000;
			$config['file_name']       = 'Agenda-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$post['image'] = $this->upload->data('file_name');
				$this->agenda_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('succes', " Data berhasil Ditambahkan");
					redirect('admin/agenda');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('admin/agenda/add');
				}
			} else {
				$this->agenda_m->insert($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('warning', " Data berhasil Ditambahkan Namun Gambar Dokumentasi tidak di masukkan");
					redirect('admin/agenda');
				} else {
					$this->session->set_flashdata('error', " Data Gagal Ditambahkan");
					redirect('admin/agenda/add');
				}
			}
		} else if (isset($post['edit'])) {
	
			$config['upload_path']    = './assets/admin/img/agenda/';
			$config['allowed_types']  = 'jpg|png|jpeg|icon';
			$config['max_size']       = 10000;
			$config['file_name']       = 'Image-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
			$this->load->library('upload', $config);
			$gambar = $this->upload->do_upload('image');
			if ($gambar == true) {
				$aset = $this->agenda_m->get($post['id'])->row();
				if ($aset->pamflet_agenda != null) {
					$target_file = './assets/admin/img/agenda/'.$aset->pamflet_agenda;
					unlink($target_file);
					$post['image'] = $this->upload->data('file_name');
				} else if ($aset->pamflet_agenda == null) {
					$post['image'] = $this->upload->data('file_name');
				}
			} else {
				$aset = $this->agenda_m->get($post['id'])->row();
				$post['image'] = $aset->pamflet_agenda;
			}
			$this->agenda_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/agenda');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/agenda/edit/'.$post['id']);
			}
		} else {
			$this->session->set_flashdata('warning', " System Error");
			redirect('admin/agenda');
		}
    }


    public function del($id)
    {
        $aset = $this->agenda_m->get($id)->row();
		if ($aset->pamflet_agenda != null) {
			$target_file = './assets/admin/img/agenda/' . $aset->pamflet_agenda;
			unlink($target_file);
		}
		$this->agenda_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', " Data berhasil di hapus ");
		} else {
			$this->session->set_flashdata('error', " Data gagal di hapus ");
		}
		redirect('admin/agenda');
    }

  
	
}
