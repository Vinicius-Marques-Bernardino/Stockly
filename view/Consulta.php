<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Produtos cadastrados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <nav class="navbar navbar-dark">
        <div class="container">
            <span class="navbar-brand">
                Stockly | Sistema de Produtos
            </span>
        </div>
    </nav>

    <div class="container mt-5 mb-5">

        <div class="card shadow-sm">

            <div class="card-header p-3 card-header-consulta">
                <h4 class="mb-0">Produtos cadastrados</h4>
            </div>

            <div class="card-body p-3">

                <div class="table-responsive">

                    <table class="table table-striped table-hover align-middle">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Produto</th>
                                <th>Preço</th>
                                <th>Categoria</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php foreach ($produtos as $produto) { ?>

                                <tr>
                                    <td>
                                        <?php echo htmlspecialchars((string) $produto['id']); ?>
                                    </td>

                                    <td>
                                        <?php echo htmlspecialchars($produto['produto']); ?>
                                    </td>

                                    <td>
                                        R$ <?php
                                        echo number_format(
                                            $produto['preco'],
                                            2,
                                            ',',
                                            '.'
                                        );
                                        ?>
                                    </td>

                                    <td>
                                        <?php echo htmlspecialchars($produto['categoria']); ?>
                                    </td>

                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-2">

                                            <a
                                                href="index.php?acao=editar&id=<?php echo urlencode((string) $produto['id']); ?>"
                                                class="btn btn-sm btn-editar">
                                                Editar
                                            </a>

                                            <form
                                                action="index.php?acao=excluir"
                                                method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('Tem certeza de que deseja excluir este produto?');">

                                                <input
                                                    type="hidden"
                                                    name="acao"
                                                    value="excluir">

                                                <input
                                                    type="hidden"
                                                    name="id"
                                                    value="<?php echo htmlspecialchars((string) $produto['id']); ?>">

                                                <button
                                                    type="submit"
                                                    class="btn btn-sm btn-outline-danger">
                                                    Excluir
                                                </button>

                                            </form>

                                        </div>
                                    </td>
                                </tr>

                            <?php } ?>

                            <?php if (empty($produtos)) { ?>
                                <tr>
                                    <td colspan="5" class="text-center text-secondary py-4">
                                        Nenhum produto cadastrado.
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>

                    </table>

                </div>

                <a href="index.php" class="btn btn-voltar">
                    Voltar ao menu
                </a>

            </div>
        </div>
    </div>

</body>
</html>