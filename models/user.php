<?php

   class User {
      private $username;

      public function __construct($_username)
      {
         $this->setUsername($_username);
      }

      // Getter functions
      public function getUsername() {
         return $this->username;
      }


      // Setter functions
      public function setUsername($_username) {
         $this->username = $_username;
      }
   }