<?php
  include("../php/Conexao.php");
  $sql_code = "SELECT * FROM Produto";
  $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NOME LOJA</title>
  <link rel="stylesheet" href="../css/Home.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <header
      class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="Home.php" target="_blank" class="logo"><img id="logo" src="../imagens/Logo.png" class="imagem"></a>
        </a>
      </div>



    </header>
  </div>

    <div class="container">
        <form method="post" action="../php/LoginClientes.php"  enctype="multipart/form-data">
            <label for="nome">Email</label>
            <div class="form-floating mb-3">
            <input
                type="text"
                class="form-control"
                id="email"
                name="email"
                placeholder=""
            />
            </div>
            <label for="nome">Senha</label>
            <div class="form-floating mb-3">
            <input
                type="password"
                class="form-control"
                id="Senha"
                name="Senha"
                placeholder="********"
            />
            <div class="d-grid">
                <button class="btn btn-primary" type="submit" action="LoginClientes.php">Logar</button>
                <a class="btn btn-primary" type="submit" href="CadastroCliente.php">Cadastrar-se</a>
            </div>
        </form>
    </div>
  
  
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
       <img id="logo" src="../imagens/Logo.png" class="imagem">
      </a>
      <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-body-secondary" href="#">Natan</a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#">Bruno</a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#">Ricardo</a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#">Iago</a></li>
      </ul>
  </footer>

</body>

</html>