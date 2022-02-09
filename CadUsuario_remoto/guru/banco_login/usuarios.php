<?php
Class Usuario{
    private $pdo;
    public $msgErro="";

    public function conectar($nome, $host, $usuario, $senha){
        global $pdo;
        global $msgErro;
        try{
          $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        }catch(PDOException $e){
            $msgErro = $e->getMessage();
        }
    }
    /*
    public function cadastrar($nome, $email, $nivel, $senha)
    {
        global $pdo;
        global $msgErro;
        //verificar se o usuario esta cadastrado
        $sql = $pdo->prepare("SELECT id_usuarios FROM usuarios WHERE email = :e ");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            return false;//ja esta cadastrado
        }
        else{
            //caso nao esteja cadastrado
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, nivel) VALUES (:n, :e, :s, :i)" );
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", $senha);
            $sql->bindValue(":i", $nivel);
            $sql->execute();
            return true ;
        }
        //caso não,Procurar o administrador
    }
    */
    public function logar($usuario, $senha){
        global $pdo;
        global $msgErro;
        //verificar se o nome e senha esta cadastrado ou nao
        $sql = $pdo->prepare("SELECT id_usuarios FROM usuarios WHERE nome = :u AND senha = :s");
        $sql->bindValue(":u",$usuario); //basicamento o bindValue ele meio que abrevia, o $usuario virou: :u...
        $sql->bindValue(":s",md5($senha)); // a $senha virou: :s. E o md5, basicamente criptografa a senha do usúario, dando mais segurança...
        $sql->execute(); //vai executar...
        if($sql->rowCount() > 0){
            //entrar no sistema (sessao)
            $dado = $sql->fetch();
            session_start(); //inicia a sessão...
            $_SESSION['id_usuarios'] = $dado['id_usuarios']; //verifica se possui o id_usuario...
            return true; //ele está cadastrado, ou seja ele logou...
        } else{
            return false; //não foi possível logar...
        }
    }
}
?>
