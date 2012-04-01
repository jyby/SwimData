<?php

class Serie extends CI_Model {

  var $table = 'serie';
  
  function __construct() {
    parent::__construct();
  }
  
  function get($id = null) {
    if(is_null($id))
      return array();
    
    // compact('id') == array('id' => $id)    
    $query = $this->db->get_where($this->table, compact('id'));
    $row = $query->result();
    $d = $row[0];
    
    return array(
      'id' => $d->id,
      'nadador_id' => $d->nadador_id,
      'fecha' => $d->fecha,
      'hora' => $d->hora,
      'modo' => $d->modo,
      'metros_piscina' => $d->metros_piscina,
      'duracion' => $d->duracion,
      'distancia' => $d->distancia,
      'unidad' => $d->unidad,
      'largos' => $d->largos,
      'numero_serie' => $d->numero_serie,
      'duracion_serie' => $d->duracion_serie,
      'distancia_serie' => $d->distancia_serie,
      'descanso' => $d->descanso,
      'brazadas' => $d->brazadas,
      'estilo' => $d->estilo,
      'comentario' => $d->comentario,
      'brazadas_por_min' => $d->brazadas_por_min,
      'eficiencia' => $d->eficiencia,
      'velocidad' => $d->velocidad,
      'largo_brazadas' => $d->largo_brazada,
      'evaluacion' => $d->evaluacion);
  }

  function getAll($nadador_id = null) {
    if(is_null($nadador_id)) {
      $query = $this->db->get($this->table);
    } else {
      $query = $this->db->get_where($this->table, compact('nadador_id'));      
    }

    $rows = $query->result();
    $data = array();
    foreach($rows as $d) {
      $data[] = array(
	'id' => $d->id,
	'nadador_id' => $d->nadador_id,
	'fecha' => $d->fecha,
	'hora' => $d->hora,
	'modo' => $d->modo,
	'metros_piscina' => $d->metros_piscina,
	'duracion' => $d->duracion,
	'distancia' => $d->distancia,
	'unidad' => $d->unidad,
	'largos' => $d->largos,
	'numero_serie' => $d->numero_serie,
	'duracion_serie' => $d->duracion_serie,
	'distancia_serie' => $d->distancia_serie,
	'descanso' => $d->descanso,
	'brazadas' => $d->brazadas,
	'estilo' => $d->estilo,
	'comentario' => $d->comentario,
	'brazadas_por_min' => $d->brazadas_por_min,
	'eficiencia' => $d->eficiencia,
	'velocidad' => $d->velocidad,
	'largo_brazadas' => $d->largo_brazada,
	'evaluacion' => $d->evaluacion);
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