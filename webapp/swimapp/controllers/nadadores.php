<?php

class Nadadores extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->_authorization();
  }

  function _authorization() {
    if(!$this->session->userdata('nombre'))
      redirect('welcome');
  }

  function _set_view($view_name = '', $data = array()) {
    $data['main_content'] = $view_name;
    $this->load->view('templates/layout', $data);
  }
  
  function index() {

    $this->load->model('Nadador');

    $id = $this->session->userdata('id');
    $this->_set_view('nadador');

    
    
  }

}