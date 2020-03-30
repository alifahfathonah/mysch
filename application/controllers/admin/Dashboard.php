<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->model('auth_m', 'auth');
	}

	public function index()
	{
        $data = [
			'page' => 'Dashboard',
        ];
        $this->template->load('admin/template', 'admin/dashboard', $data);
	}

	
}
