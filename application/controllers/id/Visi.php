<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Visi extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_status();
		$this->load->model('landing/visi_m');
	}

	public function index()
	{
		$query = $this->visi_m->get();
		$data = [
			'row' => $query->row()
		];
        $this->template->load('id/template', 'id/visi', $data);
	}

	
}
