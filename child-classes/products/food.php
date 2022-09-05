<?php

   require __DIR__ . '/../../parent-classes/product.php';

   class Food extends Product {
      protected $expirationDate;
      protected $weight;
      protected $origin;

      function __construct($_name, $_price, $_image, $_description, $_expirationDate, $_weight, $_origin)
      {
         parent::__construct($_name, $_price, $_image, $_description);
         $this->expirationDate = $_expirationDate;
         $this->weight = $_weight;
         $this->origin = $_origin; 
      }
   }