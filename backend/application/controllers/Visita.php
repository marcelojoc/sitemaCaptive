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

      $plantilla=null;
      $crud = new grocery_CRUD();

      $crud->set_table('creds');
      $crud->columns('name','mac','email','checkin','checkout');
      $crud->display_as('checkin','ingreso')
           ->display_as('checkout', 'Salida');
      $crud->unset_add();  // sacar el boton agregar campo
      $crud->unset_edit();
      $output = $crud->render();

$this->load->view('backend/visita_g', $output);

    //d($plantilla);


    } else {
      echo " no hay sesion";
      redirect('login/','refresh');
    }

  }


}