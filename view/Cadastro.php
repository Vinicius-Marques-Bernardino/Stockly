<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Produtos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <nav class="navbar navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                Stockly | Sistema de Produtos
            </a>
        </div>
    </nav>

    <div class="container mt-5 mb-5">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">

                <div class="mb-4">
                    <h2>Cadastrar produto</h2>
                    <p class="text-secondary">
                        Preencha os campos para cadastrar um produto.
                    </p>
                </div>

                <div class="card shadow-sm">

                    <div class="card-header p-3 card-header-cadastro">
                        <h5 class="mb-0">Informações do produto</h5>
                    </div>

                    <div class="card-body p-4">

                        <form action="index.php?acao=salvar" method="POST">

                            <div class="mb-3">
                                <label for="nome" class="form-label">
                                    Nome do produto
                                </label>

                                <input type="text"
                                       id="nome"
                                       name="nome"
                                       class="form-control"
                                       placeholder="Ex.: Teclado sem fio"
                                       required>
                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label for="preco" class="form-label">
                                        Preço (R$)
                                    </label>

                                    <input type="number"
                                           id="preco"
                                           name="preco"
                                           class="form-control"
                                           step="0.01"
                                           min="0"
                                           placeholder="0,00"
                                           required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="quantidade" class="form-label">
                                        Quantidade
                                    </label>

                                    <input type="number"
                                           id="quantidade"
                                           name="quantidade"
                                           class="form-control"
                                           min="0"
                                           placeholder="0"
                                           required>
                                </div>

                            </div>
                            
                            <div class="mb-3">
                                <label for="id_categoria" class="form-label">
                                    Categoria
                                </label>

                            <select id="id_categoria"   
                                name="id_categoria"
                                class="form-select"
                                required>

                                <option value="">Selecione uma categoria</option>
                                <option value="1">Eletrônicos</option>
                                <option value="2">Livros</option>
                                <option value="3">Roupas</option>
                                <option value="4">Alimentos</option>
                                <option value="5">Outros</option>
                            </select>
                        </div>

                            <div class="mb-4">
                                <label for="descricao" class="form-label">
                                    Descrição
                                </label>

                                <textarea id="descricao"
                                          name="descricao"
                                          class="form-control"
                                          rows="3"
                                          placeholder="Detalhes do produto"></textarea>
                            </div>

                            <div class="d-flex justify-content-between">

                                <button type="reset"
                                        class="btn btn-outline-secondary">
                                    Limpar
                                </button>

                                <button type="submit"
                                        class="btn btn-cadastrar">
                                    Cadastrar produto
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
