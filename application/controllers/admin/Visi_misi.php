<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('admin/visi_m');
	}

	public function index()
	{
        $query = $this->visi_m->get();
        $data = [
            'page' => 'Visi Misi Sekolah',
            'row' => $query->row()
        ];
        $this->template->load('admin/template', 'admin/fitur/visi_misi/index', $data);
    }
    
    public function update()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['update2'])) {
			$this->visi_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data berhasil Diperbaharui");
				redirect('admin/visi_misi');
			} else {
				$this->session->set_flashdata('error', " Data Gagal Diperbaharui");
				redirect('admin/visi_misi');
			}
		} else {
			$this->session->set_flashdata('warning', " System Error (Pastikan data yang diisi sesuai format)");
			redirect('admin/visi_misi');
		}
    }

	
}
