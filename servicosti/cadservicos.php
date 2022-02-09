<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <title>Serviços de TI</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  </head>
  
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.php">DevWeb <span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="">Serviços</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="#">Conteúdo 2</a></li>-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conteúdos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="https://developer.mozilla.org/pt-BR/docs/Web/HTML" target="_blank">HTML5</a></li>
                <li><a href="https://developer.mozilla.org/pt-BR/docs/Web/CSS" target="_blank">CSS3</a></li>
                <li><a href="https://developer.mozilla.org/pt-BR/docs/Web/javascript" target="_blank">JavaScript</a></li>
                <li><a href="https://www.php.net/manual/pt_BR/" target="_blank">PHP</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  <!-- CRIA FORMULÁRIO DA PÁGINA DE CADASTRO -->
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputNOME">Nome</label>
          <input type="text" class="form-control" id="inputNome" placeholder="Nome" >
        </div>
        <div class="form-group col-md-4">
          <label for="inputEMAIL">Email</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="email@provedor.com.br">
        </div>
        <div class="form-group col-md-3">
          <label for="inputCELULAR">Fone</label>
          <input type="text" class="form-control" id="fone" placeholder="(XX)99999-8888"  onblur="maskFone(this)" onfocus="tiraHifen(this)" onkeypress="return event.charCode >= 48 && event.charCode <= 57"  maxlength="14">
        </div>
        <div class="form-group col-md-3">
          <label for="inputCPF">CPF</label>
          <input type="text" class="form-control" id="inputCpf" placeholder="234.456.678-99" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="14">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputCEP">CEP</label>
          <input type="text" class="form-control" id="inputCep" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="86843-560">
        </div>
        <div class="form-group col-md-5">
          <label for="inputENDERECO">Endereço</label>
          <input type="text" class="form-control" id="inputEndereco" placeholder="Rua Iara">
        </div>
        <div class="form-group col-md-2">
          <label for="inputNUMERO">Número</label>
          <input type="text" class="form-control" id="inputNumero" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="2043">
        </div>
        <div class="form-group col-md-3">
          <label for="inputBAIRRO">Bairro</label>
          <input type="text" class="form-control" id="inputBairro" placeholder="Jardim dos Palmares">
        </div>
        <div class="form-group col-md-6">
          <label for="inputCIDADE">Cidade</label>
          <input type="text" class="form-control" id="inputCidade" placeholder="Londrina">
        </div>
        <div class="form-group col-md-4">
          <label for="inputESTADO">Estado</label>
          <input type="text" id="inputEstado" class="form-control" placeholder="PR">
        </div>
      </div>
      <div class="form-row">
        <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" onclick="imprimeValor()">Testar</button>
        </div>
      </div>
    </form>

    <!-- JavaScript da página para validação de campos do formulário-->
    <script src="_js/validacoes.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>
