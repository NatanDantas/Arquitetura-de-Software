<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Produtos</title>
    </head>
    <body>
        <form method="post" action="../php/CadastroProduto.php">
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
            <label for="nome">Preco</label>
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control"
                id="preco"
                name="preco"
                placeholder=""
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
                    <span>Foto de Perfil</span>
                    <input name="ftCapa" type="file">
                </div>
            </div>
            <div class="d-grid">
              <button class="btn btn-primary" type="submit" action="CadastroProduto.php">Cadastrar</button>
            </div>
        </form>
    </body>
</html>