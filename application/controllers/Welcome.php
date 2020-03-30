<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		record_visitor();
		echo " My School Landing Page ";
	}
}
