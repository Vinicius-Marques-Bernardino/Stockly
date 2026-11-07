<?php
require_once __DIR__.'/controller/Produtos_controller.php';
$controller = new ProdutosController();
$acao=$_GET['acao'] ?? 'menu';

switch($acao){
    case 'cadastrar':
        require_once __DIR__.'/view/Cadastro.php';
        break;

    case 'salvar':
        $controller->salvar();
        break;
    
    case 'consultar':
        $controller->consultar();
        break; 

    case 'pesquisar':
        $controller->pesquisar();
        break;
    
    case 'editar':
        $controller->editar();
        break;

    case 'excluir':
        $controller->excluir();
        break;

    case 'atualizar':
        $controller->atualizar();
        break;

    default:
    require_once __DIR__.'/view/Menu.php';
    break;
}

?>