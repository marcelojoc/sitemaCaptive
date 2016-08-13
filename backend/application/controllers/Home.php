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

//d($_POST);
      $desde= $this->input->post('txtdesde');
      $hasta= $this->input->post('txthasta');
      


      if(isset($desde) && $desde == '' || isset($hasta) && $hasta == '' ){

          redirect('home/','refresh');
          
      }else{


// huesped= 1   visitante = 0
      //d(date_format($minvalue, 'YY-mm-dd'));
          $minvalue= date("Y-m-d", strtotime(str_replace('/','-',$desde)));
          $maxvalue= date("Y-m-d", strtotime(str_replace('/','-',$hasta)));

          
          $crud = new grocery_CRUD();

          $crud->set_table('creds');

          $crud->set_relation('huesped','tipo','valor');


                    $crud->where("checkin BETWEEN '$minvalue' AND '$maxvalue'");
          $crud->where("tipo = 0");

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
