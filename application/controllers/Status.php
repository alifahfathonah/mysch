<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('msc_m');
	}

	public function maintenance()
	{
        $this->load->view('errors/status/maintenance');
	}

	
}

?>