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
    $this->load->model('Serie');
    
    $nadador_id = $this->session->userdata('id');
    $data['nadador'] = $this->Nadador->get($nadador_id);
    $data['series'] = $this->Serie->getAll($nadador_id);
    
    $this->_set_view('nadador', $data);    
  }

  function upload() {
    if( !$this->input->post('submit') )
      redirect('index');

    if( $_FILES['file']['type'] == "text/csv" ) {
      if ($_FILES['file']['error'] > 0) {
	$error = "Hubo un error procesando el archivo";
      } else {
	$status = $this->_handle($_FILES['file']);
      }
    } else {
      $error = "Tipo de archivo no permitido. Sólo .csv";
    }
  }

  function _handle($file) {
    
    $stats = array();
    $status = "";
    
    if (($handle = fopen($file['tmp_name'], "r")) !== FALSE) {
      if (($data = fgetcsv($handle)) !== FALSE)
	;
      
      while (($data = fgetcsv($handle)) !== FALSE) {
	$stats[] = $data;
      }
      
      fclose($handle);

      $this->load->model('Serie');

      print_r($stats);
      
    } else {
      $status = "No se pudo leer el archivo";
    }
    

    return $status;    

  }

}