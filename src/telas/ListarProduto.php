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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
</head>

<body>

  <header class="header">
    <div class="content">

      <a href="Home.html" target="_blank" class="logo"><img id="logo" src="../imagens/Logo.png" class="imagem"></a>

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

  <button class="glow-on-hover" type="button">+</button>

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
  </div>

</body>

</html>