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
	function index() {
	  $data['main_content'] = 'welcome';
	  $this->load->view('templates/layout', $data);	  
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

	function registro() {

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */