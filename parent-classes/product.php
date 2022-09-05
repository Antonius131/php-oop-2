<?php

   class Product {
      protected $name;
      protected $price;
      protected $image;
      protected $description;

      function __construct($_name, $_price, $_image, $_description)
      {
         $this->name = $_name;
         $this->price = $_price;
         $this->image = $_image;
         $this->description = $_description;
      }

      protected function getName() {
         return $this->name;
      }

      protected function getPrice() {
         return $this->price;
      }

      protected function getImage() {
         return $this->image;
      }

      protected function getDescription() {
         return $this->description;
      }
   }