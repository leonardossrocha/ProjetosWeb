
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="banco_login/style.css">
    <title>Login</title>
</head>
<body>
    <div id="corpo-form">
    <h1>Logar</h1>
    <form method="POST" >
        <label>Usuario:</label>
        <input type="text" name="nome" placeholder="Nome de Usuario">
        </br>
        </br>
        <label>Senha:</label>
        <input type="password" name="senha" placeholder="Coloque sua senha">
        </br>
        </br>
        </br>
        <input type="submit" value="Logar">
    </form>
    </div>


<?php
require_once 'banco_login/usuarios.php'; //chamando o arquivo usuarios.php...
$u = new Usuario; //adiciona uma nova classe...

if (isset($_POST['nome'])) { //serve para saber se uma variável está definida
    $usuario = addslashes($_POST['nome']); //addslashes adiciona
    $senha = addslashes($_POST['senha']);     //uma proteção...

    if (!empty($usuario) && !empty($senha)) {
        $u->conectar("system_guru", "localhost", "leonardorocha", "leonardo@123");
        if ($u->msgErro == "") {
            if ($u->logar($usuario, $senha)) {
                header("location: https://www.uol.com.br/");
            } else {
                echo "Usúario e/ou senha estão incorretos!";
            }
        } else {
            echo "Erro: " . $u->msgErro;
        }
    } else {
        echo "Preencha todos os campos!";
    }
} else {
  echo "Preencha todos os campos";
}
?>
</body>
</html>
