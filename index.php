<?php
  require_once 'src/entities/Users.php';
  $user = new Users(1,"Marius", "MAPPA", "mappabertrand@gmail.com", "password", true);
  var_dump($user);