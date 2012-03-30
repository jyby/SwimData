<?php

class Reader extends CI_Controller {

  public function index() {
    $stats = array();
    
    if (($handle = fopen("examples/log.csv", "r")) !== FALSE) {
      if (($data = fgetcsv($handle)) !== FALSE) {
	$headers = $data;
      } else {
	// ERROR
      }
      
      while (($data = fgetcsv($handle)) !== FALSE)
	$stats[] = $data;      
      
      fclose($handle);
    } else {
      // ERROR
    }
    
  }

}