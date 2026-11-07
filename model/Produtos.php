<?php

require_once __DIR__.'/../config/database.php'; //Busca conexão na pasta config
class Produtos{
    private $pdo; //Classe que irá receber produto

    public function __construct(){
        $this->pdo=Database::connect();
    }

    public function salvar($nome, $preco, $id_categoria){
        $sql = "INSERT INTO produtos(nome, preco, id_categoria) 
                    VALUES (?, ?, ?)"; //String de conexão
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([$nome, $preco, $id_categoria]);
    }
      public function consultar(){
        $sql = 'SELECT
                    produtos.id,
                    produtos.nome AS produto,
                    produtos.preco,
                    categorias.nome AS categoria
                FROM produtos
                INNER JOIN categorias
                    ON produtos.id_categoria = categorias.id';
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function pesquisar($nome){
        $sql = 'SELECT
                produtos.id,
                produtos.nome,
                produtos.preco,
                categorias.nome AS categoria
            FROM produtos
            LEFT JOIN categorias
                ON produtos.id_categoria = categorias.id
            WHERE produtos.nome LIKE :nome
            ORDER BY produtos.nome';

    $stmt = $this->pdo->prepare($sql);

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ 'nome' => '%' . $nome . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function buscarId($id) {
        $sql = 'SELECT * 
        FROM produtos 
        WHERE id = ?';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
}

    public function atualizar($id, $nome, $preco, $id_categoria){
        $sql = 'UPDATE produtos SET 
                    nome = ?,
                    preco = ?,
                    id_categoria = ?
                WHERE id = ?';
            
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $preco, $id_categoria, $id]);
            
    }

    public function excluir($id){
        $sql = 'DELETE FROM produtos
            WHERE id = ?';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->rowCount();
    }

}
