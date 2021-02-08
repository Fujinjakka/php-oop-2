<?php

require_once __DIR__ . "/Perfume.php";

class Female extends Perfume {
  
  public $gender;

  function __construct($id, $prize, $name, $brand, $size, $gender){

    parent::__construct($id, $prize, $name, $brand, $size);
  
    $this->gender = $gender;
    
  }

}
