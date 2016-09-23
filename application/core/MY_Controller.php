<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
abstract class MY_Controller extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$logged = $this->session->logged;
		if(!$logged)
			redirect('/login');
	}
}