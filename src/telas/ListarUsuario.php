<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Usuarios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/ListarUsuario.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</head>

<body>

  <header class="header">
    <div class="content">

      <a href="Home.php" target="_blank" class="logo"><img id="logo" src="../imagens/Logo.png" class="imagem"></a>

      <input class="mobile-btn" type="checkbox" id="mobile-btn" />
      <label class="mobile-icon" for="mobile-btn"><span class="hamburguer"></span></label>

      <ul class="nav">
        <li><a href="Home.php" title="Home">Home</a></li>
        <li><a href="ListarUsuario.php" title="Usuário">Usuários</a></li>
        <li><a href="ListarProduto.php" title="Produtos">Produtos</a></li>
      </ul>
    </div><!--content-->
  </header>
  

  <div class="container">
    <h1>Listagem de Usuários</h1>
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label id="nomeFiltro" for="filtro">Filtrar por nome:</label>
      <input type="text" name="filtro" id="filtro" value="<?php echo isset($_GET['filtro']) ? $_GET['filtro'] : ''; ?>">
      <button type="submit">Filtrar</button>
    </form>
  </div>

  <div class="container">
    <button class="glow-on-hover" type="button"><a href="Cadastro.html">+</a></button>
    <table>
      <thead>
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Status</th>
          <th>Grupo</th>
          <th>Editar</th>
          <th>Inativar</th>
        </tr>
      </thead>
      <tbody>
        <?php include("../php/ListarUsuarios.php"); ?>
      </tbody>
    </table>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuario</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="../php/CadastroProduto.php"  enctype="multipart/form-data">
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nome Usuario:</label>
                <input type="text" class="form-control" id="recipient-name" name="nmUsuario">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">CPF:</label>
                <input type="text" class="form-control" id="recipient-name" name="cpf">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">email:</label>
                <input type="text" class="form-control" id="recipient-name" name="preco">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">senha:</label>
                <input type="text" class="form-control" id="recipient-name" name="quantidade">
              </div>
              <div class="mb-3">
                <select name="cargo">
                  <option value="" disabled selected>Escolha sua área</option>
                  <option value="Admin" name="cargo">Admin</option>
                  <option value="Estoquista" name="cargo">Estoquista</option>
                </select>
              </div>
              <div class="mb-3">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Ativo</label>
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
  </div>

</body>

</html>