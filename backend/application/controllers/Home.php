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


  // $this->form_validation->set_rules('txtdesde', 'txtdesde', 'trim|required');

  // $this->form_validation->set_rules('txthasta', 'txthasta', 'trim|required');

  // if($this->form_validation->run() == FALSE)
  // {
  //   //si falla manda mensaje de error
  //   d($this->form_validation->run());
	// 			$this->form_validation->set_message('required','Completar los campos de fechas');
				
  // }

  // else
  // {
  //   //Accede al area privada
  //  d($_POST);
  //  echo('saaaaaaaaaaaaaaaaaaaa');
  // }




    if ($this->session->userdata('logged_in')!= NULL) {

      $desde= $this->input->post('txtdesde');
      $hasta= $this->input->post('txthasta');


      if($desde=="" ){

          redirect('home/','refresh');
          
      }



  //d(date_format($minvalue, 'YY-mm-dd'));
      $minvalue= date("Y-m-d", strtotime(str_replace('/','-',$desde)));
      $maxvalue= date("Y-m-d", strtotime(str_replace('/','-',$hasta)));

      
      $crud = new grocery_CRUD();
      $crud->where("checkin BETWEEN '$minvalue' AND '$maxvalue'");
      $crud->where("huesped = 1");
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
