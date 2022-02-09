<?php

$servidor = "localhost";
$usuario = "leonardorocha"; //Configurar usuário do banco para conexao
$senha = "leonardo@123"; // Configurar senha do usuário para conexao
$dbname = "DBUsuario"; //Informar nome do Banco

//Criar a conexao

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "<h1>Conexão bem sucedida</h1>";

?>
