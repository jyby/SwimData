<?php

class Entrenador extends CI_Model {

  var $table = 'entrenador';
  
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
      'nombre' => $data->nombre,
      'email' => $data->email);    
  }

  function getAll() {
    $query = $this->db->get($this->table);
    $rows = $query->result();

    $data = array();
    foreach($rows as $row) {
      $data[] = array(
	'nombre' => $row->nombre,
	'email' => $row->email,);
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
  
}