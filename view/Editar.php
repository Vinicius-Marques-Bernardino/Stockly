
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Editar produto | Stockly</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                Stockly | Sistema de Produtos
            </a>
        </div>
    </nav>

    <div class="container mt-5 mb-5">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">

                <div class="mb-4">
                    <h2>Editar produto</h2>
                    <p class="text-secondary">
                        Altere as informações do produto selecionado.
                    </p>
                </div>

                <div class="card shadow-sm">

                    <div class="card-header card-header-edicao p-3">
                        <h5 class="mb-0">Informações do produto</h5>
                    </div>

                    <div class="card-body p-4">

                        <form action="index.php?acao=atualizar" method="POST">

                            <input type="hidden"
                                   name="id"
                                   value="<?= htmlspecialchars((string) $produto['id'], ENT_QUOTES, 'UTF-8') ?>">

                            <div class="mb-3">
                                <label for="nome" class="form-label">
                                    Nome do produto
                                </label>

                                <input type="text"
                                       id="nome"
                                       name="nome"
                                       class="form-control"
                                       value="<?= htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8') ?>"
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
                                           value="<?= htmlspecialchars((string) $produto['preco'], ENT_QUOTES, 'UTF-8') ?>"
                                           required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="id_categoria" class="form-label">
                                        Categoria
                                    </label>

                                    <select id="id_categoria"
                                            name="id_categoria"
                                            class="form-select"
                                            required>

                                        <option value="">Selecione uma categoria</option>

                                        <option value="1"
                                            <?= (int) $produto['id_categoria'] === 1 ? 'selected' : '' ?>>
                                            Eletrônicos
                                        </option>

                                        <option value="2"
                                            <?= (int) $produto['id_categoria'] === 2 ? 'selected' : '' ?>>
                                            Livros
                                        </option>

                                        <option value="3"
                                            <?= (int) $produto['id_categoria'] === 3 ? 'selected' : '' ?>>
                                            Roupas
                                        </option>

                                        <option value="4"
                                            <?= (int) $produto['id_categoria'] === 4 ? 'selected' : '' ?>>
                                            Alimentos
                                        </option>

                                        <option value="5"
                                            <?= (int) $produto['id_categoria'] === 5 ? 'selected' : '' ?>>
                                            Outros
                                        </option>

                                    </select>
                                </div>

                            </div>

                            <div class="d-flex justify-content-between">

                                <a href="index.php?acao=consultar"
                                   class="btn btn-outline-secondary">
                                    Cancelar
                                </a>

                                <button type="submit"
                                        class="btn btn-cadastrar">
                                    Salvar alterações
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

                <p class="text-center text-secondary small mt-4">
                    Stockly · Sistema de Produtos
                </p>

            </div>
        </div>
    </div>

</body>
</html>
