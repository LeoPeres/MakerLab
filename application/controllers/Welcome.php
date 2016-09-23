<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('twig');
		$logged = $this->session->logged;
		if(!$logged)
			redirect('/login');
	}

	public function index()
	{
		$data['siteTitulo'] = "Dashboard";
		$this->twig->display('welcome', $data);
	}
}
