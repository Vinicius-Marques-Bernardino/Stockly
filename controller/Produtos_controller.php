<?php

require_once __DIR__.'/../model/Produtos.php';
Class ProdutosController{
    private $model;

    public function __construct(){
        $this->model= new Produtos(); 
    }

    public function salvar(){

        $nome=$_POST['nome'] ?? '';
        $preco=$_POST['preco'] ?? '';
        $id_categoria=$_POST['id_categoria'] ?? '';

        if ($nome === '' || strlen($nome) > 150) { // Validação do nome
            exit('Erro: informe um nome válido para o produto.');
        }   

        if (!is_numeric($preco) || $preco <= 0) {  // Validação do preço
            exit('Erro: informe um preço válido.');
        }
    
        $id_categoria = filter_var( // Validação da categoria
        $id_categoria,
        FILTER_VALIDATE_INT
        );

        if ($id_categoria === false || $id_categoria <= 0) {
            exit('Erro: selecione uma categoria válida.');
        }

        $this->model->salvar($nome, $preco, $id_categoria);
        header('Location:index.php');
        exit;
    }

    public function consultar(){
        $produtos = $this->model->consultar();
        require_once __DIR__."/../view/Consulta.php";
    }

    public function pesquisar(){
        $pesquisa_nome=$_GET['nome'] ?? '';

        $produtos = $this->model->pesquisar($pesquisa_nome);
        require_once __DIR__."/../view/Pesquisar.php";
        exit;
    }

    public function editar(){
        $id = $_GET['id'] ?? null;
        $produto = $this->model->buscarId($id);

        if (!$produto) {
        echo "Produto não encontrado.";
        return;
    }
        require_once __DIR__.'/../view/Editar.php';

    }

    public function atualizar(){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $id_categoria = $_POST['id_categoria'];

        $this->model->atualizar($id, $nome, $preco, $id_categoria);
        header('Location:index.php?acao=consultar');
        exit;
    }
    public function excluir(){
        $id = $_POST['id'] ?? null;
        $this->model->excluir($id);
        header('Location:index.php?acao=consultar');
    }

}

?>