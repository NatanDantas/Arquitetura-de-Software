<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Produtos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"> 
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

        <div class="container">
          <form method="post" action="../php/CadastroProduto.php"  enctype="multipart/form-data">
              <label for="nome">Nome do Produto</label>
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="nmProduto"
                  name="nmProduto"
                  placeholder=""
                />
              </div>
              <label for="nome">Descricao do Produto</label>
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="descricao"
                  name="descricao"
                  placeholder=""
                />
              </div>
              <label for="nome">Preço</label>
              <div class="form-floating mb-3">
                <input
                  type="number"
                  class="form-control"
                  id="preco"
                  name="preco"
                  placeholder=""
                  step="0.01" required
                />
              </div>
              <label for="nome">Quantidade</label>
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="quantidade"
                  name="quantidade"
                  placeholder=""
                />
              </div>
              <div class="file-field input-field">
                  <div>
                      <span>Foto de Capa</span>
                      <input name="ftCapa" type="file">
                  </div>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary" type="submit" action="CadastroProduto.php">Cadastrar</button>
              </div>
          </form>
        </div>
    </body>
</html>