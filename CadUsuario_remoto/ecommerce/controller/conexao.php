<?php

  $user = 'leonardorocha';
  $pass = 'leonardo@123';
  $server = 'localhost';
  $db = 'ecommerce';

  $mysqli = mysqli_connect($server, $user, $pass, $db);
  $mysqli->set_charset('utf8');

  if ($mysqli->connect_error){
    die ('Connect Error');
  }
?>