<?php

class Grupo extends CI_Model {

  var $table = 'grupo';
  
  function __construct() {
    parent::__construct();
  }
  
  function get($id = null) {
    if(is_null($id))
      return array();

    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->join('entrenador', 'entrenador.id = grupo.entrenador_id');

    $query = $this->db->get();
    $row = $query->result();
    $data = $row[0];
    
    return array(
      'id_grupo' => $data->id,
      'nombre_grupo' => $data->nombre_grupo,
      'entrenador_id' => $data->entrenador_id,
      'nombre_entrenador' => $data->nombre,
      'email' => $data->email);

  }

  function getAll() {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->join('entrenador', 'entrenador.id = grupo.entrenador_id');
    
    $query = $this->db->get();
    $rows = $query->result();

    $data = array();
    foreach($rows as $row) {
      $data[] = array(
	'id_grupo' => $row->id,
	'nombre_grupo' => $row->nombre_grupo,
	'entrenador_id' => $row->entrenador_id,
	'nombre_entrenador' => $row->nombre,
	'email' => $row->email);
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