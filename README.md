# Stockly — Sistema de Gerenciamento de Produtos

Aplicação web desenvolvida para praticar a construção de sistemas CRUD utilizando PHP e MySQL. O projeto permite cadastrar, consultar, pesquisar, editar e excluir produtos, organizando o código com base no padrão arquitetural MVC (Model-View-Controller).

## Funcionalidades

- **Cadastro de produtos:** registro de produtos com nome, preço e categoria.
- **Consulta de produtos:** visualização dos produtos cadastrados em uma tabela.
- **Pesquisa:** localização de produtos pelo nome, utilizando correspondência parcial.
- **Edição:** atualização das informações de um produto existente.
- **Exclusão:** remoção de produtos cadastrados.

## Tecnologias utilizadas

| Tecnologia | Aplicação |
|---|---|
| PHP | Lógica da aplicação e processamento das requisições |
| MySQL | Armazenamento e gerenciamento dos dados |
| PDO | Conexão com o banco de dados e execução de consultas |
| HTML5 | Estruturação das páginas |
| CSS3 | Estilização e personalização da interface |
| Bootstrap 5 | Componentes e responsividade da interface |

## Organização do projeto

```text
Stockly/
│
├── config/
│   ├── database.local.php
│   └── database.php
│
├── controller/
│   └── Produtos_controller.php
│
├── model/
│   └── Produtos.php
│
├── view/
│   ├── Cadastro.php
│   ├── Consulta.php
│   ├── Editar.php
│   ├── Menu.php
│   └── Pesquisar.php
│
├── css/
│   └── style.css
│
├── .gitignore
├── README.md
└── index.php
```

### Arquitetura MVC

O projeto utiliza o padrão MVC para separar as responsabilidades da aplicação:

- **Model:** responsável pela comunicação com o banco de dados e pelas operações relacionadas aos produtos.
- **View:** responsável pela apresentação das páginas e pela interação com o usuário.
- **Controller:** recebe as requisições, aciona o Model e direciona a aplicação para a View correspondente.

O arquivo `index.php` funciona como ponto de entrada e direciona as operações de acordo com o parâmetro `acao`.

## Banco de dados

O sistema utiliza MySQL e trabalha com duas tabelas principais:

- `produtos`: armazena os dados dos produtos, incluindo nome, preço e identificador da categoria.
- `categorias`: armazena as categorias disponíveis para classificação dos produtos.

A tabela `produtos` utiliza o campo `id_categoria` para relacionar cada produto à sua respectiva categoria.

## Como executar o projeto

### 1. Pré-requisitos

- PHP 8 ou superior.
- MySQL Server.
- Navegador web.
- Editor de código, como Visual Studio Code.

### 2. Configurar o banco de dados

Crie o banco de dados `databasePW` no MySQL e execute o script SQL disponibilizado no projeto (`database.sql`) para criar as tabelas e inserir os dados iniciais.

### 3. Configurar a conexão

Abra `config/database.php` e configure os parâmetros de conexão com o seu ambiente MySQL.

**Importante:** não publique senhas ou credenciais pessoais no repositório. Utilize configurações locais ou variáveis de ambiente.

### 4. Executar a aplicação

Abra o terminal na pasta raiz do projeto e execute:

```bash
php -S localhost:8000
```

Em seguida, acesse:

```text
http://localhost:8000
```

## Objetivo do projeto

O Stockly foi desenvolvido como projeto de aprendizagem, com o objetivo de consolidar conhecimentos em desenvolvimento web com PHP, integração com bancos de dados relacionais e organização de aplicações utilizando MVC.

A implementação também proporcionou prática com consultas SQL, operações CRUD, formulários HTML, requisições GET e POST e estilização com Bootstrap.

---

**Projeto acadêmico desenvolvido para fins de estudo e prática de desenvolvimento web.**