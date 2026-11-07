<?php

class Database
{
    public static function connect(): PDO
    {
        $configPath = __DIR__ . '/database.local.php';

        if (!file_exists($configPath)) {
            throw new RuntimeException(
                'Arquivo de configuração do banco de dados não encontrado.'
            );
        }

        $config = require $configPath;

        try {
            $pdo = new PDO(
                "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4",
                $config['user'],
                $config['password']
            );

            $pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $pdo;

        } catch (PDOException $e) {
            error_log($e->getMessage());

            throw new RuntimeException(
                'Não foi possível conectar ao banco de dados.',
                0,
                $e
            );
        }
    }
}