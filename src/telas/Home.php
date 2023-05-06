<?php
include("../php/Conexao.php");
session_start();
$logado = $_SESSION['Logado'];
$nome = $_SESSION['nmCliente'];
$hidden = "";
$hiddenUser = "";

// Aqui ta dando esses erros
// Warning: Undefined array key "Logado" on line 4
// Warning: Undefined array key "nmCliente" on line 5

if ($logado) {
  $hidden = "visually-hidden";
} else {
  $hiddenUser = "visually-hidden";
}
$sql_code = "SELECT * FROM Produto";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="../css/Home.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/afdd67c71b.js" crossorigin="anonymous"></script>

</head>

<body>

  <!-- Header -->
  <div class="container">
    <header
      class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="Home.php" target="_blank" class="logo">
          <img id="logo" src="../imagens/Logo.png" class="imagem">
        </a>
      </div>

      <!-- Pesquisa -->
      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="Pesquisar"
        action="<?php echo $_SERVER['PHP_SELF']; ?>" id="PesquisaHeader">
        <input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Recipient's username"
          aria-describedby="button-addon2" value="<?php echo isset($_GET['filtro']) ? $_GET['filtro'] : ''; ?>">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>

        <!-- Login e botão -->
      <div class="col-md-3 text-end">
        <div class="<?php echo $hiddenUser ?>">
          <p class="text-dark me-3">Olá,
            <?php echo $nome ?>
          </p>
          <a href="InfoCliente.php" type="button">ver detalhe</a>
        </div>
        <a href="LoginCliente.php" type="button" class="btn btn-outline-primary me-2 <?php echo ($hidden) ?>">Login</a>
        <a href="LoginCliente.php" class="btn btn-primary">
        <i class="fa-solid fa-basket-shopping" style="color: #ffffff;"></i>
        </a>
      </div>
    </header>
  </div>

      <!-- Barra de navegação -->
  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
    <li><a href="#" class="nav-link px-2">Coleção</a></li>
    <li><a href="#" class="nav-link px-2">Lançamentos</a></li>
    <li><a href="#" class="nav-link px-2">Promoções</a></li>
    <li><a href="#" class="nav-link px-2">Sobre nós</a></li>
  </ul>

      
      <!-- Cards dos produtos -->
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php if ($sql_query->num_rows > 0): ?>
        <?php while ($produto = $sql_query->fetch_assoc()): ?>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="<?= $produto['ftCapa'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  <?= $produto['nmProduto'] ?>
                </h5>
                <p class="card-text">
                  <?= $produto['descricao'] ?>
                </p>
                <p class="card-text">
                R$ <?= $produto['preco'] ?>
                </p>
                <a href="InfoProduto.php?id=<?= $produto['id_produto'] ?>" class="btn btn-primary">Ver Mais</a>
              </div>
            </div>
          </div>
        <?php endwhile ?>
      <?php endif ?>
    </div>
  </div>


  <!-- Footer -->
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