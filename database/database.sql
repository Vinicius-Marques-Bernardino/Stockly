-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS databasePW
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE databasePW;

-- Tabela de categorias
CREATE TABLE IF NOT EXISTS categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

-- Tabela de produtos
CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    id_categoria INT NOT NULL,

    CONSTRAINT fk_produtos_categorias
        FOREIGN KEY (id_categoria)
        REFERENCES categorias(id)
);

-- Categorias iniciais
INSERT INTO categorias (id, nome) VALUES
(1, 'Eletrônicos'),
(2, 'Livros'),
(3, 'Roupas'),
(4, 'Alimentos'),
(5, 'Outros');