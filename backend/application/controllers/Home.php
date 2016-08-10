<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    // 		carga de helper para url y modelo de usuario
      $this->load->helper('url');
      $this->load->model('huesped_model');

      $this->load->library('grocery_CRUD');  

  }


  // public function index()
  // {

  //   if ($this->session->userdata('logged_in')!= NULL) {
  //     # code...
 

  //   $this->load->view("backend/head_view"); 
  //   $this->load->view("backend/menu_view"); 
  //   $this->load->view('backend/home_view');


  //   $this->load->view("backend/footer_view");

  //   } else {
  //     echo " no hay sesion";
  //     redirect('login/','refresh');
  //   }

  // }



    public function index()
  {

    if ($this->session->userdata('logged_in')!= NULL) {

$minvalue= '2016-08-01';
$maxvalue= '2016-08-02';
      
      $crud = new grocery_CRUD();
      $crud->where("checkin BETWEEN '$minvalue' AND '$maxvalue'");
      $crud->where("huesped = 0");
      $crud->set_subject('huespedes entre   y entre');
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
      //echo " no hay sesion";
      redirect('/login','refresh');
    }

  }
}
