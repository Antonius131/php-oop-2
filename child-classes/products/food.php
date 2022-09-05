<?php

   require_once __DIR__ . '/../../parent-classes/product.php';

   class Food extends Product {
      protected $expirationDate;
      protected $weight;
      protected $origin;
   }