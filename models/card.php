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
   }