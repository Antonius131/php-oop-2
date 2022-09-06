<?php

   class Cart{
      private $productsNo;
      private $userOrder;
      private $paymentCard;
      private $total;

      public function __construct($_productsNo, $_userOrder, $_paymentCard, $_total)
      {
         $this->setProductsNo($_productsNo);
         $this->setUserOrder($_userOrder);
         $this->setPaymentCard($_paymentCard);
         $this->setTotal($_total);
      }

      // Getter functions
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


      // Setter functions
      public function setProductsNo($_productsNo) {
         $this->productsNo = $_productsNo;
      }

      public function setUserOrder($_userOrder) {
         $this->userOrder = $_userOrder;
      }

      public function setPaymentCard($_paymentCard) {
         $this->paymentCard = $_paymentCard;
      }

      public function setTotal($_total) {
         $this->total = $_total;
      }
   }