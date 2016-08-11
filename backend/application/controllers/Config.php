<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    // 		carga de helper para url y modelo de usuario
      $this->load->helper('url');
      $this->load->model('Usuario_model');

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

      $usuario= $this->session->logged_in['nombre'];
      $crud = new grocery_CRUD();
      $crud->where("nombre = '$usuario'");
      $crud->set_table('user');
      $crud->columns('nombre','nick_name');
      $crud->display_as('nombre','Usuario')
           ->display_as('nick_name', 'nick');
       $crud->unset_export();  // sacar el boton agregar  imprimir y eliminar
       $crud->unset_add();
       $crud->unset_print();
       $crud->unset_delete();
      $output = $crud->render();

      $this->load->view('backend/config_view', $output);

    //d($plantilla);


    } else {
      //echo " no hay sesion";
      redirect('/login','refresh');
    }

  }
}
