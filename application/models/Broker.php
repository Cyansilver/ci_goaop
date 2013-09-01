<?php
class Broker {
 
   private $name;
   private $id;
 
   function __construct($name, $id) {
      $this->name = $name;
      $this->id = $id;
   }
 
   function buy($symbol, $volume, $price) {
      return $volume * $price;
   }
 
   function sell($symbol, $volume, $price) {
      return $volume * $price;
   }
 
}
