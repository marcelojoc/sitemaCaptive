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
 

    $this->load->view("backend/head_view"); 
    $this->load->view("backend/menu_view"); 
    $this->load->view('backend/home_view');


    $this->load->view("backend/footer_view");

    } else {
      echo " no hay sesion";
      redirect('login/','refresh');
    }

  }

}
