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

      // Getter functions
      public function getHolder() {
         return $this->holder;
      }
      
      public function getNumber() {
         return $this->number;
      }

      public function getExpirationDate() {
         return $this->expirationDate;
      }

      public function getCvv() {
         return $this->cvv;
      }


      // Setter functions
      public function setHolder($_holder) {
         $this->holder = $_holder;
      }
      
      public function setNumber($_number) {
         $this->number = $_number;
      }

      public function setExpirationDate($_ExpirationDate) {
         $this->expirationDate = $_ExpirationDate;
      }

      public function setCvv($_cvv) {
         $this->cvv = $_cvv;
      }
   }