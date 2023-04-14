<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/ListarProduto.css" />
</head>

<body>

  <header class="header">
    <div class="content">

      <a href="Home.php" target="_blank" class="logo"><img id="logo" src="../imagens/Logo.png" class="imagem"></a>

      <input class="mobile-btn" type="checkbox" id="mobile-btn" />
      <label class="mobile-icon" for="mobile-btn"><span class="hamburguer"></span></label>

      <ul class="nav">
        <li><a href="HomeAdmin.php" title="Home">Home</a></li>
        <li><a href="ListarUsuario.php" title="Usuário">Usuários</a></li>
        <li><a href="ListarProduto.php" title="Produtos">Produtos</a></li>
      </ul>
    </div><!--content-->
  </header>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>

  <div class="container">
    <h1>Listagem de Produtos</h1>

    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label id="nomeFiltro" for="filtro">Filtrar por nome:</label>
      <input type="text" name="filtro" id="filtro" value="<?php echo isset($_GET['filtro']) ? $_GET['filtro'] : ''; ?>">
      <button type="submit">Filtrar</button>
    </form>
  </div>
 
  <div class="container">
    <button class="glow-on-hover" type="button"><a href="CadastroProduto.php">+</a></button>
    <div>
      <table>
        <thead>
          <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th>Editar</th>
          </tr>
        </thead>
        <tbody>
          <?php include("../php/ListarProduto.php"); ?>
        </tbody>
      </table>
    </div>
    <?php
      $consulta = "SELECT * FROM Produto where id_produto = $idProduto";
      $con = $mysqli->query($consulta) or die($mysqli->error);
      while ($dados = $con->fetch_array()) {
    ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Produto</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="../php/AlterarProduto.php" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nome Produto:</label>
                <input type="text" class="form-control" id="recipient-name" name="nmProduto" value="<?php echo $dados["nmProduto"] ?>">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Descricao:</label>
                <textarea class="form-control" id="message-text" name="descricao" value="<?php echo $dados["descricao"] ?>"></textarea>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Preço:</label>
                <input type="text" class="form-control" id="recipient-name" name="preco" value="<?php echo $dados["preco"] ?>">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Quantidade:</label>
                <input type="text" class="form-control" id="recipient-name" name="quantidade" value="<?php echo $dados["quantidade"] ?>">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Foto de Capa:</label>
                <input type="file" class="form-control" id="recipient-name" name="ftCapa" value="<?php echo $dados["ftCapa"] ?>">
              </div>
              <div class="mb-3">
                <button class="btn btn-primary" type="submit" action="CadastroProduto.php">Editar</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <?php }
      $_SESSION['idProduto'] = $idProduto; 
      $mysqli->close();
    ?>
  </div>

</body>

</html>