<?php

  $user = 'leonardorocha'; //Inserir usuário do bando de dados
  $pass = 'leonardo@123'; //Inserir senha do banco de dados
  $server = 'localhost';
  $db = 'compra'; //Inserir o nome do banco de dados

  $mysqli = mysqli_connect($server, $user, $pass, $db);
  $mysqli->set_charset('utf8');

  if ($mysqli->connect_error){
    die ('Connect Error');
    echo "</h2> Erro de Conexão. </h2>";
  }
?>
