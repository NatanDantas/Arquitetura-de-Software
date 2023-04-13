<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/HomeAdmin.css" />
</head>
<body>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <div class="container"> 
        <h1>Listagem de Produto</h1>

        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <label for="filtro">Filtrar por nome:</label>
          <input type="text" name="filtro" id="filtro" value="<?php echo isset($_GET['filtro']) ? $_GET['filtro'] : ''; ?>">
          <button type="submit">Filtrar</button>
        </form>

        <table>
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Status</th>
              <th>Grupo</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Nome do Produto:</label>
                    <input type="text" class="form-control" id="recipient-name" name="nmProduto">
                  </div>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">Descricao:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Preço:</label>
                    <input type="text" class="form-control" id="recipient-name" name="nmProduto">
                  </div>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Quantidade:</label>
                    <input type="text" class="form-control" id="recipient-name" name="nmProduto">
                  </div>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Foto de Capa:</label>
                    <input type="file" class="form-control" id="recipient-name" name="nmProduto">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
</html>