<?php

class Nadador extends CI_Model {

  var $table = 'nadador';
  
  function __construct() {
    parent::__construct();
  }
  
  function get($id = null) {
    if(is_null($id))
      return array();
    
    // compact('id') == array('id' => $id)    
    $query = $this->db->get_where($this->table, compact('id'));
    $row = $query->result();
    $data = $row[0];
    
    return array(
      'id' => $data->id,
      'nombre' => $data->nombre,
      'email' => $data->email,
      'codigo_curso' => $data->codigo_curso,
      'participa_rama' => $data->participa_rama,
      'edad' => $data->edad,
      'estatura' => $data->estatura,
      'peso' => $data->peso,);    
  }

  function getAll() {
    $query = $this->db->get($this->table);
    $rows = $query->result();

    $data = array();
    foreach($rows as $row) {
      $data[] = array(
	'id' => $row->id,
	'nombre' => $row->nombre,
	'email' => $row->email,
	'codigo_curso' => $row->codigo_curso,
	'participa_rama' => $row->participa_rama,
	'edad' => $row->edad,
	'estatura' => $row->estatura,
	'peso' => $row->peso);	
    }

    return $data;
  }

  function add($data = array()) {
    if(!empty($data))
      $this->db->insert($this->table, $data);
  }

  function delete($id = null) {
    if(!is_null($id))
      $this->db->delete($this->table, compact('id'));
  }

  function update($id = null, $data = array()) {
    if(!is_null($id)) {
      $this->db->where('id', $id);
      $this->db->update($this->table, $data);
    }
  }

  function validate() {
    $this->db->where('email', $this->input->post('email'));
    $this->db->where('password', sha1($this->input->post('password')));
    
    $query = $this->db->get($this->table);

    if( $query->num_rows == 1 ) {
      $nadador = $query->result();      
      return $this->get( $nadador[0]->id );
      
    } else {
      return FALSE;
      
    } 
  }

  function register() {
    if( strcmp($this->input->post('password'), $this->input->post('password2')) != 0 )
      return FALSE;

    $reps = $this->db->get_where($this->table, array('email' => $this->input->post('email')));    
    if ($reps->num_rows == 1)
      return FALSE;
    
    $data = array(
      'nombre' => $this->input->post('nombre'),
      'email' => $this->input->post('email'),
      'codigo_curso' => $this->input->post('codigo_curso'),
      'participa_rama' => $this->input->post('participa_rama'),
      'edad' => $this->input->post('edad'),
      'estatura' => $this->input->post('estatura'),
      'peso' => $this->input->post('peso'),
      'password' => sha1($this->input->post('password')));

    $this->add($data);
    return TRUE;
  }

  
}