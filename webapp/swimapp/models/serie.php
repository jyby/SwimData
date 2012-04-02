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
      'log_date' => $d->log_date,
      'log_time' => $d->log_time,
      'log_type' => $d->log_type,
      'pool' => $d->pool,
      'units' => $d->units,
      'total_duration' => $d->total_duration,
      'calories' => $d->calories,
      'total_lengths' => $d->total_lengths,
      'total_distance' => $d->total_distance,
      'nset' => $d->nset,
      'duration' => $d->duration,
      'strokes' => $d->strokes,
      'distance' => $d->distance,
      'speed' => $d->speed,
      'efficiency' => $d->efficiency,
      'hr_begin' => $d->hr_begin,
      'version' => $d->version,
      'hr_end' => $d->hr_end,
      'hr_avg' => $d->hr_avg,
      'stroke_rate' => $d->stroke_rate,
      'hr_min' => $d->hr_min,
      'hr_max' => $d->hr_max);
      
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
	'log_date' => $d->log_date,
	'log_time' => $d->log_time,
	'log_type' => $d->log_type,
	'pool' => $d->pool,
	'units' => $d->units,
	'total_duration' => $d->total_duration,
	'calories' => $d->calories,
	'total_lengths' => $d->total_lengths,
	'total_distance' => $d->total_distance,
	'nset' => $d->nset,
	'duration' => $d->duration,
	'strokes' => $d->strokes,
	'distance' => $d->distance,
	'speed' => $d->speed,
	'efficiency' => $d->efficiency,
	'stroke_rate' => $d->stroke_rate,
	'hr_min' => $d->hr_min,
	'hr_max' => $d->hr_max,
	'hr_avg' => $d->hr_avg,
	'hr_begin' => $d->hr_begin,
	'hr_end' => $d->hr_end,
	'version' => $d->version,);
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