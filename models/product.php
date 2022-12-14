<?php
   class Product {
      private $name;
      private $price;
      private $image;
      private $description;

      public function __construct($_name, $_price, $_image, $_description)
      {
         $this->setName($_name);
         $this->setPrice($_price);
         $this->setImage($_image);
         $this->setDescription($_description);
      }

      // Getter Functions
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


      // Setter Functions
      public function setName($_name) {
         $this->name = $_name;
      }

      public function setPrice($_price) {
         $this->price = $_price;
      }

      public function setImage($_image) {
         $this->image = $_image;
      }

      public function setDescription($_description) {
         $this->description = $_description;
      }
   }