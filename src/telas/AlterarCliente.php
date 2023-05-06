<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cliente</title>
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

            NOME DO CLIENTE

            <!-- Login e botão -->
            <div class="col-md-3 text-end">
                <a href="InfoCliente.php" style="color: #1D5C96;">Voltar</a>
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

     <!-- form alterar cliente -->
    <div class="container">

        <form method="post" action="../php/CadastroProduto.php" enctype="multipart/form-data">

            <label for="nome">Nome Completo</label>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nmCliente" name="nmCliente" placeholder="" />
            </div>
            <label for="nome">Data de Nascimento</label>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="dtNascimento" name="dtNascimento" placeholder="" />
            </div>
            <label for="nome">Gênero</label>
            <div class="form-floating mb-3">
                <select name="genero">
                    <option value="" disabled selected>Genero</option>
                    <option value="Masculino" name="genero">Masculino</option>
                    <option value="Feminino" name="genero">Feminino</option>
                    <option value="Outro" name="genero">Outro</option>
                </select>
            </div>

            <label for="nome">Senha</label>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="senha" name="senha" placeholder="" />
            </div>

            <label for="nome">Confirmar Senha</label>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="confirmSenha" name="confirmSenha" placeholder="" />
            </div>

            <div>
                <button type="button" class="btn btn-danger">Cancelar</button>
                <button type="button" class="btn btn-primary">Confirmar</button>
            </div>
        </form>
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