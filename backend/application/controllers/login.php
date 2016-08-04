<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {
	
	
		function __construct()
		{

			/* carga de libreria para validar formulario
			setear reglas de validacion
			comprobar la validacion del formulario
			disparar el callback para checkear si existe el usuario (devuelve los datos del tipo o falso)
			comprobar si vas validaciones son correctas

			*/

			parent::__construct();
			$this->load->helper(array('url', 'form','security')); // cargo helpers de url y para crear formularios
			$this->load->library('form_validation');
			$this->load->model('usuario_model','',TRUE); // cargo el modelo de usuario para login
		}

		public function index()
		{

			// comprueba si hay sesion configurada
			if($this->session->userdata('logged_in')){

				$this->load->view('backend/home'); // muestro la vista de form login

			} else {
				
				$this->load->view('backend/login_view'); // muestro la vista de form login
			}

		}


		public function checklogin ()
		{

			/*Este metodo recibe los datos post del formulario 
			  y lo procesa en busca del usuario en la base de datos.
			  Si no recibe datos post, es por que es la primera vez que accede
			*/

			if ($this->input->post('username')){

				$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');

				$this->form_validation->set_rules('txtpass', 'txtpass', 'trim|required|xss_clean|callback_check_database');

				if($this->form_validation->run() == FALSE)
				{
					//si falla la validacion te manda al login nuevamente
					$this->load->view('backend/login_view');
				}

				else
				{
					//Accede al area privada
					redirect('/home/','refresh');
				}
// 
			}else {
				//No hay datos POST entonces va  a la vista de login		
				$this->load->view('backend/login_view'); // muestro la vista de form login
			}


		} // fin metodo checkLogin
	


		function check_database($txtpass)  // callback para la validacion
		{

				//traigo el valor del form por post
				$username = $this->input->post('username');

				//consulta la base de datos
				$result = $this->usuario_model->login($username, $txtpass);

			if($result)
			{
				$sess_array = array();

				$ci = & get_instance();


				foreach($result as $row)  // Aqui se cargan los parametros del usuario dentro de la sesion
				{
				$sess_array = array(             
					'id_usuario' => $row->id_user,
					'nombre' => $row->nombre,
					'apellido' => $row->apellido,
					'nick' => $row->nick_name
				);
				}

				$this->session->unset_userdata('logged_in');
				$this->session->set_userdata('logged_in', $sess_array);

				return TRUE;
			}
			else
			{
				$this->form_validation->set_message('check_database', 'Datos de acceso Invalidos');
				return false;
			}
		}



		function out()
		{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		$this->load->view('backend/login_view');
		}


}

