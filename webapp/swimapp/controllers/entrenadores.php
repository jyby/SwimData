<?php

class Entrenadores extends CI_Controller {

  public function __construct() {
    parent::__construct();

    // carga los modelos (ver swimapp/models/entrenador.php)
    $this->load->model('Entrenador');    
  }
  
  public function index() {
    print_r($this->Entrenador->getAll());
  }
  
}