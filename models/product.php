<?php
   class Product {
      private $name;
      private $price;
      private $image;
      private $description;

      public function __construct($_name, $_price, $_image, $_description)
      {
         $this->name = $_name;
         $this->price = $_price;
         $this->image = $_image;
         $this->description = $_description;
      }

      public function getName() {
         return $this->name;
      }

      public function getPrice() {
         return $this->price;
      }

      public function getImage() {
         return $this->image;
      }

      public function getDescription() {
         return $this->description;
      }
   }