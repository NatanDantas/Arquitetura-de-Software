<?php
  include("../php/Conexao.php");
  session_start();
  $idProduto = $_GET['id'];
  $sql_code = "SELECT * FROM Produto WHERE id_produto = $idProduto";
  $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Info Produto</title>
        <link rel="stylesheet" href="../css/Home.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <div class="col-md-3 mb-2 mb-md-0">
                    <a href="Home.php" target="_blank" class="logo"><img id="logo" src="../imagens/Logo.png" class="imagem"></a>
                    </a>
                </div>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="Pesquisar"
                    action="<?php echo $_SERVER['PHP_SELF']; ?>" id="PesquisaHeader">
                    <input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Recipient's username"
                    aria-describedby="button-addon2" value="<?php echo isset($_GET['filtro']) ? $_GET['filtro'] : ''; ?>">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                            viewBox="0 0 16 16">
                            <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>

                </form>


                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-outline-primary me-2">Login</button>
                    <button type="button" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-cart4"
                        viewBox="0 0 17 17">
                        <path
                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg>
                    </button>
                </div>
            </header>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2">Coleção</a></li>
            <li><a href="#" class="nav-link px-2">Lançamentos</a></li>
            <li><a href="#" class="nav-link px-2">Promoções</a></li>
            <li><a href="#" class="nav-link px-2">Sobre nós</a></li>
        </ul>
    
        <!-- Conteúdo -->
        <div class="container">
            <div class="row">
                <?php while ($produto = $sql_query->fetch_assoc()): ?>
                    <div class="col-6">
                        <img src="<?= $produto['ftCapa'] ?>" alt="produto" class="img-fluid">
                    </div>
                    <div class="col">
                        <h1><?= $produto['nmProduto'] ?></h1>
                        <p><?= $produto['descricao'] ?></p>
                        <p>R$ <?= $produto['preco'] ?></p>
                        <a href="" class="btn btn-success">Carrinho</a>
                        <a href="" class="btn btn-primary">Comprar</a>
                    </div>
                <?php endwhile ?>
            </div>
        </div>
        <?php session_abort() ?>           

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