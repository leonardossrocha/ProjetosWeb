<?php
include_once('controller/conexao.php');
?>
<!DOCTYPE html>
<html lang=pt-br>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Produtos</title>
  </head>
  <body>
    <header>
      <div class="center">
        <h1> Cadastro de Produtos </h1>
        <a href="index.php" target="_self">Voltar</a>
      </div>
    </header>
    <section id="produtos">
      <form action="insere-produto.php" method="post">
        Nome: <input type="text" name="nome" required></input></br>
        Descrição: <input type="text" name="descricao" required></input></br>
        Estoque: <input type="number" name="estoque" required></input></br>
        Preço: <input type="number"  name="preco" min="0.00" max="10000.00" step="0.01" required></input></br>
        Categoria:
        <setect name="seleciona_categoria">
          <option>Selecione</option>
          <?php
              $resultado_categoria = "SELECT * FROM categoria";
              $resultcategoria = mysqli_query($mysqli, $resultado_categoria);
              while ($row_categorias = mysqli_fetch_assoc($resultcategoria)) { ?>
                <option value="<?php echo $row_categorias['DESCRICAO'];?>" </option>
                // code...
              }
          ?>
      </form>
    </section>
  </body>
</html>
