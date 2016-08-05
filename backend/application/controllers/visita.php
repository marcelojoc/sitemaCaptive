<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visita extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    // 		carga de helper para url y modelo de huesped

	   $this->load->helper('url');
       $this->load->model('huesped_model');

       $this->load->library('grocery_CRUD');  
  }


  public function index()
  {

    if ($this->session->userdata('logged_in')!= NULL) {
    
    $datos["huespedes"]= $this->huesped_model->get_all();   // guardo los datos en un array asociativo para enviarlo a la vista
    $this->load->view("backend/head_view"); 
    $this->load->view("backend/menu_view"); 
    $this->load->view('backend/visita_view', $datos);


    $this->load->view("backend/footer_view");

    } else {
      echo " no hay sesion";
      redirect('login/','refresh');
    }

  }




//prueba con grocery
    public function g()
  {

    if ($this->session->userdata('logged_in')!= NULL) {

    $crud = new grocery_CRUD();
 
$crud->set_table('creds');
$output = $crud->render();



    
     $header=   $this->load->view("backend/g/head_view", true); 
     d($output);
    $this->load->view('backend/visita_g', $output);
    $this->load->view("backend/menu_view"); 

    $this->load->view("backend/footer_view");


    } else {
      echo " no hay sesion";
      redirect('login/','refresh');
    }

  }


}