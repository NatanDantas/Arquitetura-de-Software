<?php
    session_start();
    $nome = $_SESSION['nmUsuario'];
    $permissao = $_SESSION['permissao']
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home Administrador</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/HomeAdmin.css" />
  </head>
  <body>
    <header id = "grid">
      <div>
      <img id = "logo" src="../imagens/Logo.png" class="imagem">
      </div>
      <div id = "dadosAdmin">
        <strong><?= $nome?> <?= $permissao?></strong>
      </div>
      <div id = "sair">
        <strong >SAIR</strong>
      </div>
    </header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <a class="navbar-brand" href="HomeAdmin.php">Dashboard</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="CadastroProduto.php">Cadastrar Produtos</a>
            <a class="nav-link" href="ListarProduto.php">Listar Produtos</a>
            <a class="nav-link" href="Cadastro.html">Cadastrar Usuarios</a>
            <a class="nav-link" href="ListarUsuario.php">Lista de Usuarios</a>
          </div>
        </div>
      </div>
    </nav>
  </body>
</html>