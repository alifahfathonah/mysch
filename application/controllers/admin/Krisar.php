<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Krisar extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		check_login();
	}

	public function index()
	{
        read_krisar();
        $query = $this->db->get('tb_krisar');
        $data = [
            'page' => 'Kritik dan Saran',
            'row' => $query
        ];
        $this->template->load('admin/template', 'admin/config/krisar', $data);
    }
	
}
