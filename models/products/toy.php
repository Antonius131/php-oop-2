<?php 

   class Toy extends Product {
      private $type;
      private $color;
      private $size;

      public function __construct($_name, $_price, $_image, $_description, $_type, $_color, $_size)
      {
         parent::__construct($_name, $_price, $_image, $_description);
         $this->type = $_type;
         $this->color = $_color;
         $this->size = $_size; 
      }

      // Getter functions
      public function getType() {
         return $this->type;
      }
   
      public function getColor() {
         return $this->color;
      }
   
      public function getSize() {
         return $this->size;
      }
   }