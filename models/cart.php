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
   }