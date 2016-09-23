<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('twig');
		$this->load->model('User_model');
		$this->load->library('user_agent');		
	}

	public function index()
	{	
		$this->logged();
		if (isset($_GET['msg']))
			$data['msg'] = $_GET['msg'];
		else
			$data ['msg'] = NULL;
		$this->twig->display('login', $data);
	}

	public function logar()
	{
		$this->logged();
		$usuario = $this->input->post();
		$user = $this->User_model->login($usuario);
		if($user)
		{
			$this->session->set_userdata("logged", $usuario);
			redirect('/');
		}else{
			redirect($this->agent->referrer()."?msg=1");
		}
	}

	public function logged()
	{
		$logged = $this->session->logged;
		if($logged)
			redirect('/');
	}

	public function logout()
	{
		$this->session->unset_userdata('logged');
		redirect('/');	
	}

}