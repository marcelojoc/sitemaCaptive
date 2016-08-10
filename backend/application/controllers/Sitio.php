<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitio extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// 		carga de helper para url y modelo de usuario
		$this->load->helper('url');

	}

	public function index()
	{
		redirect('/login','refresh');
// or via shorthand:


	}
}
