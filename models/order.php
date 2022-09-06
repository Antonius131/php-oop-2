<?php

   class Order{
      private $productName;
      private $productQuantity;
      private $user;
      private $price;

      public function __construct($_productName, $_productQuantity, $_user, $_price)
      {
         $this->setProductName($_productName);
         $this->setProductQuantity($_productQuantity);
         $this->setUser($_user);
         $this->setPrice($_price);
      }

      // Getter functions
      public function getProductName() {
         return $this->productName;
      }

      public function getProductQuantity() {
         return $this->productQuantity;
      }

      public function getUser() {
         return $this->user;
      }

      public function getPrice() {
         return $this->price;
      }


      // Setter functions
      public function setProductName($_productName) {
         $this->productName = $_productName;
      }

      public function setProductQuantity($_productQuantity) {
         $this->productQuantity = $_productQuantity;
      }

      public function setUser($_user) {
         $this->user = $_user;
      }

      public function setPrice($_price) {
         $this->price = $_price;
      }
   }