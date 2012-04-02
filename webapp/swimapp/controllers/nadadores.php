<?php

class Nadadores extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->_authorization();
  }

  function _authorization() {
    if(!$this->session->userdata('nombre')){
      redirect('welcome');
    }     
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
	
	if($status)
	  redirect('nadadores/right');
	else
	  redirect('nadadores/wrong');
      }
    } else {
      $error = "Tipo de archivo no permitido. Sólo .csv";
    }
  }

  function right() {
    echo "Series guardadas";
  }

  function wrong() {
    echo "No se pudo leer el archivo o no se guardaron las series en la base de datos";
  }

  function _handle($file) {
    
    $stats = array();
    $status = FALSE;
    
    if (($handle = fopen($file['tmp_name'], "r")) !== FALSE) {
      // headers
      if (($data = fgetcsv($handle)) !== FALSE)
	;
      
      while (($data = fgetcsv($handle)) !== FALSE) {
	$stats[] = $data;
      }      
      fclose($handle);

      $this->load->model('Serie');
      foreach($stats as $s) {
	$tmp = array(
	  'nadador_id' => $this->session->userdata('id'),
	  'log_date' => date('Y-m-d', strtotime(str_replace('/','-',$s[1]))),
	  'log_time' => $s[2],
	  'log_type' => $s[3],
	  'pool' => $s[4],
	  'units' => $s[5],
	  'total_duration' => $s[6],
	  'calories' => $s[7],
	  'total_lengths' => $s[8],
	  'total_distance' => $s[9],
	  'nset' => $s[10],
	  'duration' => $s[11],
	  'strokes' => $s[12],
	  'distance' => $s[13],
	  'speed' => $s[14],
	  'efficiency' => $s[15],
	  'hr_begin' => $s[20],
	  'version' => $s[22],
	  'hr_end' => $s[21],
	  'hr_avg' => $s[19],
	  'stroke_rate' => $s[16],
	  'hr_min' => $s[17],
	  'hr_max' => $s[18]);
	
	$this->Serie->add($tmp);
      }
      $status = TRUE;
    } else {
      $status = FALSE;
    }
    

    return $status;    

  }

}