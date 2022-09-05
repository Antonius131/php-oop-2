<?php

   class Food extends Product {
      private $expirationDate;
      private $weight;
      private $origin;

      public function __construct($_name, $_price, $_image, $_description, $_expirationDate, $_weight, $_origin)
      {
         parent::__construct($_name, $_price, $_image, $_description);
         $this->expirationDate = $_expirationDate;
         $this->weight = $_weight;
         $this->origin = $_origin; 
      }
   }