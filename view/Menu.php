<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de Produtos</title>

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

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">

                <div class="mb-4">
                    <h2>Menu principal</h2>
                    <p class="text-secondary">
                        Escolha uma opção para gerenciar seus produtos.
                    </p>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body p-4">

                        <div class="d-grid gap-3">

                            <a href="index.php?acao=cadastrar"
                               class="menu-link">
                                <strong>+ Cadastrar produto</strong>
                                <div class="small text-secondary mt-1">
                                    Adicionar um novo produto ao sistema.
                                </div>
                            </a>

                            <a href="index.php?acao=consultar"
                               class="menu-link">
                                <strong>🕮 Consultar produtos</strong>
                                <div class="small text-secondary mt-1">
                                    Visualizar os produtos cadastrados.
                                </div>
                            </a>

                            <a href="index.php?acao=pesquisar" 
                                class="menu-link">
                                <strong>⌕ Pesquisar produtos</strong>
                                <div class="small text-secondary mt-1">
                                    Buscar produtos por nome e categoria.
                                </div>
                            </a>

                            
                            </a>


                        </div>

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
