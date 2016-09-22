<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('twig');
	}

	public function index()
	{
		$data['siteTitulo'] = "Usuários";
		$this->twig->display('usuario/list', $data);
	}

	public function adicionar()
	{
		$data['siteTitulo'] = "Adicionar Usuário";
		$this->twig->display('usuario/add', $data);
	}

	public function editar($id)
	{
		$data['siteTitulo'] = "Editar Usuário";
		$data['user'] = $id;
		$this->twig->display('usuario/edit', $data);
	}
}