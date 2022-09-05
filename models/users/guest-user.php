<?php

   class Guest extends User{

      public function __construct($_username)
      {
         parent::__construct($_username);
      }
   }