<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('twig');
		$this->load->model('User_model');
		$this->load->library('user_agent');
	}

	public function index()
	{
		$usuarios = $this->User_model->GetAll();
		$data['siteTitulo'] = "Usuários";
		$data['usuarios'] = $usuarios;
		$this->twig->display('usuario/list', $data);
	}

	public function adicionar()
	{
		$data['siteTitulo'] = "Adicionar Usuário";
		$data['msg'] = (isset($_GET['msg'])) ? $_GET['msg'] : 0;
		$this->twig->display('usuario/add', $data);
	}

	public function inserir()
	{
		$usuario = $this->input->post();
		$this->User_model->Inserir($usuario);
		redirect($this->agent->referrer()."?msg=1");
	}

	public function editar($id)
	{
		$usuario = $this->User_model->GetById($id);
		$data['usuario'] = $usuario;
		$data['siteTitulo'] = "Editar Usuário";
		$this->twig->display('usuario/edit', $data);
	}

	public function atualizar()
	{	
		$usuario = $this->input->post();
		if(is_null($usuario['id']))
			redirect($this->agent->referrer());
		$this->User_model->Atualizar($usuario['id'], $usuario);
		redirect($this->agent->referrer());
	}

	public function excluir($id)
	{
		$this->User_model->Excluir($id);
		redirect($this->agent->referrer());
	}
}