<?php

   class Card{
      private $holder;
      private $number;
      private $expirationDate;
      private $cvv;

      public function __construct($_holder, $_number, $_expirationDate, $_cvv)
      {
         $this->holder = $_holder;
         $this->number = $_number;
         $this->expirationDate = $_expirationDate;
         $this->cvv = $_cvv;
      }

      public function getHolder() {
         return $this->holder;
      }
      
      public function getNumber($number) {
         $this->number = $number;
      }

      public function getExpirationDate() {
         return $this->expirationDate;
      }

      public function getCvv() {
         return $this->cvv;
      }
   }