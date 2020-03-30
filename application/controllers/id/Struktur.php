<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_status();
		$this->load->model('landing/struktur_m');
	}

	public function index()
	{
		$query = $this->struktur_m->get();
		$data = [
			'row' => $query->row()
		];
        $this->template->load('id/template', 'id/struktur', $data);
	}

	
}
