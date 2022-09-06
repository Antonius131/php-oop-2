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

   // Getter functions
   public function getLength() {
      return $this->length;
   }

   public function getHeight() {
      return $this->height;
   }

   public function getDepth() {
      return $this->depth;
   }
}