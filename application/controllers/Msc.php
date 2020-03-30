<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Msc extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('msc_m');
	}

	public function index()
	{
        redirect('auth');
	}

	public function auth_sistem()
	{
		check_login();
		$post = $this->input->post(null, TRUE);
		if(isset($post['atuh'])){
			$sql = $this->msc_m->auth_sistem($post['s_pass']);
			if($sql->num_rows() > 0){
				redirect('msc/config/'.date('i'));
			}else{
				$this->session->set_flashdata('error', " Password Sistem Salah ");
				redirect('admin/dashboard');
			}
		}
	}

	public function config($token = null)
	{
		check_login();
		if($token == date('i')){
			$sql = $this->msc_m->get();
			$data = [
				'page' => 'Konfigurasi Sistem',
				'row' => $sql->row()
			];
			$this->template->load('admin/template', 'admin/config/index', $data);
		}else{
			$this->session->set_flashdata('error', " Waktu Pengaturan sistem telah habis, silahkan login kembali ");
			redirect('admin/dashboard');
		}
	}

	public function process()
	{
		check_login();
		$post = $this->input->post(null, TRUE);
		if(isset($post['up'])){

			if(isset($post['mm_mode'])) {
				if($post['off_mode']){
					$post['s_mode'] = $post['off_mode'];
				}else{
					$post['s_mode'] = $post['mm_mode'];
				}
			}else if(isset($post['off_mode'])){
				$post['s_mode'] = $post['off_mode'];
				if($post['mm_mode']){
					$post['s_mode'] = $post['mm_mode'];
				}else{
					$post['s_mode'] = $post['off_mode'];
				}
			}else{
				$post['s_mode'] = 1;
			}

			$this->msc_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', " Data Sistem Berhasil Diperbaharui");
			} else {
				$this->session->set_flashdata('error', " Data Sistem Gagal Diperbaharui, silahkan periksa Mode sistem ");
			}
			redirect('msc/config/'.date('i'));
		}
	}

	public function activity()
	{
		$this->db->from('tb_viwer');
		$this->db->order_by('created_viwer', 'DESC');
		$query = $this->db->get();
		$data = [
			'page' => 'Log Aktivitas dan Pengunjung Website',
			'row' => $query
		];

		$this->template->load('admin/template', 'admin/config/activity', $data);
	}

	
}