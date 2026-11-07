<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pesquisar produtos | Stockly</title>

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
                    <h2>Pesquisar produtos</h2>

                    <p class="text-secondary">
                        Digite o nome do produto que deseja localizar.
                    </p>
                </div>

                <div class="card shadow-sm">

                    <div class="card-header p-3">
                        <h5 class="mb-0">Pesquisa de produtos</h5>
                    </div>

                    <div class="card-body p-4">

                        <form action="index.php" method="GET">

                            <input type="hidden"
                                   name="acao"
                                   value="pesquisar">

                            <div class="mb-4">
                                <label for="nome" class="form-label">
                                    Nome do produto
                                </label>

                                <input type="text"
                                       id="nome"
                                       name="nome"
                                       class="form-control"
                                       placeholder="Ex.: Teclado sem fio"
                                       value="<?= htmlspecialchars($_GET['nome'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                                       required>
                            </div>

                            <div class="d-flex justify-content-between">

                                <a href="index.php"
                                   class="btn btn-outline-secondary">
                                    Voltar ao menu
                                </a>

                                <div class="d-flex gap-2">

                                    <button type="reset"
                                            class="btn btn-outline-secondary">
                                        Limpar
                                    </button>

                                    <button type="submit"
                                            class="btn btn-pesquisar">
                                        Pesquisar
                                    </button>

                                </div>

                            </div>

                        </form>
                    
                        
<?php if (isset($produtos)): ?>

    <div class="card border-0 shadow-sm mt-4">
        <div class="card-body p-4">

            <h2 class="h5 mb-1">Resultados da pesquisa</h2>

            <p class="text-secondary small mb-4">
                Produto pesquisado:
                <strong>
                    <?= htmlspecialchars($pesquisa_nome, ENT_QUOTES, 'UTF-8') ?>
                </strong>
            </p>

            <?php if (count($produtos) > 0): ?>

                <div class="table-responsive">
                    <table class="table table-hover align-middle tabela-pesquisa">

                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Produto</th>
                                <th>Categoria</th>
                                <th class="text-end">Preço</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($produtos as $produto): ?>

                                <tr>
                                    <td>
                                        <?= htmlspecialchars((string) $produto['id']) ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($produto['categoria'] ?? 'Sem categoria', ENT_QUOTES, 'UTF-8') ?>
                                    </td>

                                    <td class="text-end">
                                        R$ <?= number_format((float) $produto['preco'], 2, ',', '.') ?>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>

                <p class="text-secondary small mb-0">
                    <?= count($produtos) ?>
                    produto(s) encontrado(s).
                </p>

            <?php else: ?>

                <div class="text-center py-4">
                    <p class="mb-1 fw-semibold">
                        Nenhum produto encontrado.
                    </p>

                    <p class="text-secondary small mb-0">
                        Tente pesquisar usando outro nome.
                    </p>
                </div>

            <?php endif; ?>

        </div>
    </div>

<?php endif; ?>

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