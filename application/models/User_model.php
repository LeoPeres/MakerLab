<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends MY_Model {

	function __construct(){
		parent::__construct();
		$this->table = 'usuario';
	}

	public function login($usuario)
	{
		$this->db->where("username", $usuario['username']);
        $this->db->where("senha", $usuario['senha']);
        $usuario = $this->db->get($this->table)->row_array();
        return $usuario;
	}

}