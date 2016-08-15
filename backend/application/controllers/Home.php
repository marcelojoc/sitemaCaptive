<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    // 		carga de helper para url y modelo de usuario
      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->model('huesped_model');
      $this->load->library('grocery_CRUD'); 
      $this->load->library('form_validation');

  }

  public function index()
  {

    if ($this->session->userdata('logged_in')!= NULL) {

    $this->load->view('backend/busqueda_view');


    } else {
      //echo " no hay sesion";
      redirect('/login','refresh');
    }

  }




    public function buscar()
  {

    if ($this->session->userdata('logged_in')!= NULL) {   // me fijo si hay sesion iniciada, si no lo mando a login

      // captur todos los datos post incluso el boton
      $tipo= $this->input->post('check');
      $desde= $this->input->post('txtdesde');
      $hasta= $this->input->post('txthasta');
      $boton = $this->input->post('btn');

      // si el boton no viene por post  es por que entraron sin el form, deben volver a home
      if($boton =="" ){

          redirect('home/','refresh');
          
      }else{


         // huesped= 1   visitante = 0

          $minvalue= date("Y-m-d", strtotime(str_replace('/','-',$desde)));
          $maxvalue= date("Y-m-d", strtotime(str_replace('/','-',$hasta)));

          
          $crud = new grocery_CRUD();

          $crud->set_table('creds');

          $crud->set_relation('huesped','tipo','valor');


          $crud->where("checkin BETWEEN '$minvalue' AND '$maxvalue'");

          if(count($tipo)< 2){    // si es menor a dos quiere decir que solo tildaron una opcion o voso  o hues

          $crud->where("tipo = $tipo[0]");

          }


          $crud->columns('name','email','checkin','checkout', 'huesped');
          $crud->display_as('checkin','ingreso');
          $crud->display_as('name', 'Nombre')

              ->display_as('checkout', 'Salida');
          $crud->unset_add();  // sacar el boton agregar campo
          $crud->unset_edit();
          $crud->unset_read();
        
          $output = $crud->render();

        $this->load->view('backend/visita_g', $output);

   
     }

    } else {
      //echo " no hay sesion";
      redirect('/login','refresh');
    }

  }
}
