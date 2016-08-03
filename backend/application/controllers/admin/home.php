<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    // 		carga de helper para url y modelo de usuario
	   $this->load->helper('url');
  }


  public function index()
  {



    if ($this->session->userdata('logged_in')!= NULL) {
      # code...
      echo " hay sesion";
      $this->load->view('backend/home_view');

    } else {
      echo " no hay sesion";
      redirect('/admin/login/','refresh');
    }


  }


}
