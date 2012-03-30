<?php

class Entrenador extends CI_Model {

  function __construct() {
    parent::__construct();
  }
  
  function get($id = null) {
    if(is_null($id))
      return array();
    
    // compact('id') == array('id' => $id)    
    $query = $this->db->get_where('entrenador', compact('id'));
    $row = $query->result();
    $data = $row[0];
    
    return array(
      'nombre' => $data->nombre,
      'email' => $data->email);    
  }

  function add($data = array()) {
    if(!empty($data))
      $this->db->insert('entrenador', $data);
  }

  function delete($id = null) {
    if(!is_null($id))
      $this->db->delete('entrenador', compact('id'));
  }

  function update($id = null, $data = array()) {
    if(!is_null($id)) {
      $this->db->where('id', $id);
      $this->db->update('entrenador', $data);
    }
  }  
  
}