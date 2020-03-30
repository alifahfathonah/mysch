<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_status();
		visitor();
		$params = array('landing/home_m');
		$this->load->model($params);
    }
    
	public function index()
	{
		$query_pengumuman = $this->home_m->get_pengumuman();
		$data = [
			'pengumuman' => $query_pengumuman
		];
        $this->template->load('id/template', 'id/home', $data);
    }
}
