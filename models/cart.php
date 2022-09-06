<?php

   class Cart{
      private $productsNo;
      private $userOrder;
      private $paymentCard;
      private $total;

      public function __construct($_productsNo, $_userOrder, $_paymentCard, $_total)
      {
         $this->productsNo = $_productsNo;
         $this->userOrder = $_userOrder;
         $this->paymentCard = $_paymentCard;
         $this->total = $_total;
      }

      public function getProductsNo() {
         return $this->productsNo;
      }

      public function getUserOrder() {
         return $this->userOrder;
      }

      public function getPaymentCard() {
         return $this->paymentCard;
      }

      public function getTotal() {
         return $this->total;
      }
   }