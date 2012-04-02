<?php 

class Welcome extends CI_Controller {
  
  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   *	- or -  
   * 		http://example.com/index.php/welcome/index
   *	- or -
   * Since this controller is set as the default controller in 
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */

  function __construct() {
    parent::__construct();
    $this->_authorization();
  }

  function _authorization() {
    if($this->session->userdata('nombre'))
      redirect('nadadores');
  }
  
  function _set_view($view_name = '', $data = array()) {
    $data['main_content'] = $view_name;
    $this->load->view('templates/layout', $data);
  }
  
  function index() {
    $this->_set_view('welcome');
  }
  
  function login() {    
    $this->load->model('Nadador');
    $query = $this->Nadador->validate();
        
    if($query) {
      $this->session->set_userdata($query);
      redirect('nadadores');
    } else {
      $this->wrong();
    }    
  }
  
  function wrong() {
    echo "Usuario y/o contraseña incorrecto(s)";
  }

  function wrong2() {
    echo "Las contraseñas no coinciden o el usuario ya existe";
  }

  function right() {
    echo "Registrado exitosamente";
  }
     
  function registro() {
    if($this->input->post('submit')) {
      
      $this->load->model('Nadador');
      $query = $this->Nadador->register();
      
      if($query) {
	$this->right();
      } else {    
	$this->wrong2();
      }
    } else {
      $this->_set_view('registro');
    }
  }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */