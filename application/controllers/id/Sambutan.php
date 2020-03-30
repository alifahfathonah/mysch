<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sambutan extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_status();
		$this->load->model('landing/sambutan_m');
	}

	public function index()
	{
		$query = $this->sambutan_m->get();
		$data = [
			'row' => $query->row()
		];
        $this->template->load('id/template', 'id/sambutan', $data);
	}

	
}
