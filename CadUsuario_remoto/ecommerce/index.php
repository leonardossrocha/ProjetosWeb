<!DOCTYPE html>
<html>
  <head>
    <!-- Material disponibilizado pelo professor Anderson Macedo -->
    <meta charset="utf-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <header>
      <div class="center">
        <h1 style="text-align: center">Pedido de compra</h1>
        <a href="carrinho.php" target="_blank">Carrinho</a>
      </div>
    </header>
    <section id="produtos">
        <div class="center">
          <?php require_once('controller/produtos-busca.php'); ?>
        </div>
    </section>
    <!-- Novo código a partir daqui -->
    <section id="produtos">
        <div class="center">
          <a href="categoria.php" target="_self">Categoria</a>
        </div>
    </section>
    <section id="produtos">
        <div class="center">
          <a href="marca.php" target="_self">Marca</a>
        </div>
    </section>
    <section id="produtos">
        <div class="center">
          <a href="produtos.php" target="_self">Produtos</a>
        </div>
    </section>

  </body>
</html>
