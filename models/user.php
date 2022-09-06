<?php

   class User {
      private $username;

      public function __construct($_username)
      {
         $this->nickname = $_username;
      }

      public function getUsername() {
         return $this->username;
      }
   }