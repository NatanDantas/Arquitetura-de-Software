<?php
  include("../php/Conexao.php");
  session_start();
  $idProduto = $_GET['id'];
  $sql_code = "SELECT * FROM Produto WHERE id_produto = $idProduto";
  $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
?>
<html>
    <head>
        <title>Editar Produto</title>
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
          <?php while ($produto = $sql_query->fetch_assoc()): ?>
            <form method="post" action="../php/AlterarProduto.php"  enctype="multipart/form-data">
                <label for="nome">Nome do Produto</label>
                <div class="form-floating mb-3">
                    <input
                    type="text"
                    class="form-control"
                    id="nmProduto"
                    name="nmProduto"
                    placeholder=""
                    value="<?= $produto['nmProduto'] ?>"
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
                    value="<?= $produto['descricao'] ?>"
                    />
                </div>
                <label for="nome">Preco</label>
                <div class="form-floating mb-3">
                    <input
                    type="text"
                    class="form-control"
                    id="preco"
                    name="preco"
                    placeholder=""
                    value="<?= $produto['preco'] ?>"
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
                    value="<?= $produto['quantidade'] ?>"
                    />
                </div>
                <div class="file-field input-field">
                    <div>
                        <span>Foto de Capa</span>
                        <input name="ftCapa" type="file">
                    </div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit" action="AlterarProduto.php">Editar</button>
                </div>
            </form>
          <?php endwhile; 
                $_SESSION['idProduto'] = $idProduto; 
          ?>
        </div>
    </body>
</html>