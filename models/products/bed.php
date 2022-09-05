<?php

class Bed extends Product {
   private $length;
   private $height;
   private $depth;

   public function __construct($_name, $_price, $_image, $_description, $_length, $_height, $_depth)
   {
      parent::__construct($_name, $_price, $_image, $_description);
      $this->length = $_length;
      $this->height = $_height;
      $this->depth = $_depth; 
   }
}