<?php

   class RegisteredUser extends User{
      private $name;
      private $lastName;
      private $email;

      public function __construct($_username, $_name, $_lastName, $_email)
      {
         parent::__construct($_username);
         $this->name =  $_name;
         $this->lastName =  $_lastName;
         $this->email =  $_email;
      }
   }