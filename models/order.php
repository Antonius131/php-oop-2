<?php

   class Order{
      private $productName;
      private $productQuantity;
      private $user;
      private $price;

      public function __construct($_productName, $_productQuantity, $_user, $_price)
      {
         $this->productName = $_productName;
         $this->productQuantity = $_productQuantity;
         $this->user = $_user;
         $this->price = $_price;
      }

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
   }