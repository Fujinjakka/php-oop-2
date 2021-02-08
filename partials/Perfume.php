<?php

require_once __DIR__ . "/../TheFragranceShop.php";

class Perfume extends TheFragranceShop {
  
  public $name;
  public $brand;
  public $size;

  function __construct($id, $prize, $name, $brand, $size){

    parent::__construct($id, $prize);
    
    $this->name = $name;
    $this->brand = $brand;
    $this->size = $size;
    
  }

}
