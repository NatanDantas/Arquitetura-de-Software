<?php
include("../php/Conexao.php");
session_start();
$logado = $_SESSION['Logado'];
$nome = $_SESSION['nmCliente'];
$idCliente = $_SESSION['idCliente'];
$hidden = "";
$hiddenUser = "";
if ($logado) {
  $hidden = "visually-hidden";
} else {
  $hiddenUser = "visually-hidden";
}
$sql_code = "SELECT * FROM Cliente where id_cliente = $idCliente";
//$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Info Cliente</title>
  <link rel="stylesheet" href="../css/Home.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/afdd67c71b.js" crossorigin="anonymous"></script>
</head>

<body>

  - Permitido a troca do nome do cliente logado, data de nascimento e genero.
  - Deve ser permitido também a alteração da senha.
  
  <!-- Header -->
  <div class="container">
    <header
      class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="Home.php" target="_blank" class="logo">
          <img id="logo" src="../imagens/Logo.png" class="imagem">
        </a>
      </div>

      NOME DO CLIENTE

      <!-- Login e botão -->
      <div class="col-md-3 text-end">
        <a href="Home.php" style="color: #1D5C96;">Voltar</a>
        <a href="LoginCliente.php" style="color: #D4251A;">Sair</a>
      </div>
    </header>
  </div>

  <!-- ta dando erro aqui-->
  <div>
    <?php if ($sql_query->num_rows > 0): ?>
      <?php while ($cliente = $sql_query->fetch_assoc()): ?>
        <label for="recipient-name" class="col-form-label">
          <?php $cliente['nmCliente'] ?>
        </label>
        <label for="recipient-name" class="col-form-label">
          <?php $cliente['cpf'] ?>
        </label>
        <label for="recipient-name" class="col-form-label">
          <?php $cliente['email'] ?>
        </label>
        <label for="recipient-name" class="col-form-label">
          <?php $cliente['dtNacimento'] ?>
        </label>
        <label for="recipient-name" class="col-form-label">
          <?php $cliente['genero'] ?>
        </label>
      <?php endwhile ?>
    <?php endif ?>
  </div>

  <!-- Infos cliente-->
  <div class="row justify-content-between">
    <!-- Campo nome -->
    <div class="col-12 col-sm-6 col-md-8">
      <h3 for="nome">Nome Completo</h3>
      <p>Nome cliente</p>
      <!-- Campo cpf -->
      <div class="col-12 col-sm-6 col-md-8">
        <h3 for="Cpf">CPF</h3>
        <p>CPF cliente</p>
      </div>
      <!-- Campo email -->
      <div class="col-12 col-sm-6 col-md-8">
        <h3 for="Email">E-mail</h3>
        <p>Email cliente</p>
      </div>
      <!-- Campo senha -->
      <div class="col-12 col-sm-6 col-md-8">
        <h3 for="Senha">Senha</h3>
        <p>********** cliente</p>
      </div>
      <!-- Campo data -->
      <div class="col-12 col-sm-6 col-md-8">
        <h3 for="Date">Data</h3>
        <p>Data nascimento cliente</p>
      </div>
      <!-- Campo genero -->
      <div class="col-12 col-sm-6 col-md-8">
        <h3 for="Genero">Genero</h3>
        <p>Genere cliente</p>
      </div>
      <a href="AlterarCliente.php" class="btn btn-primary">Editar</a>
    </div>

    <!-- Campo endereço, pensei em deixar o input e quando clicar no adicionar, adiciona o novo endereço, e o prof pede 
    para a partir do segundo endereco cadastrado, definir qual o endereço padrao e/ou excluir um deles-->
    <div class="col-6 col-md-4">
      <h3 for="Endereco">Endereços</h3>
      <p>Endereço 1 cliente</p>
      <input type="Endereco" class="form-control" id="endereco" name="endereco" />
      <a href="#" class="btn btn-primary">Adicionar</a>

    </div>
  </div>
  
  <!-- footer -->
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
      <li class="ms-3"><a class="text-body-secondary" href="#">Iago</a></li>
    </ul>
  </footer>

</body>

</html>