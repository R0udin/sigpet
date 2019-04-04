<?php
include_once '../model/cliente.php';
include_once '../model/fornecedor.php';
include_once '../model/produto.php';

class Conexao
{
    private static $conexao;
    private function __construct()
    {}
    public static function getInstance()
    {
        if (is_null(self::$conexao)) {
            self::$conexao = new \PDO('mysql:host=us-cdbr-iron-east-03.cleardb.net;port=3306;dbname=heroku_2cccf68a07efbec', 'bdd1a6d5f20a06', '29443055');
            self::$conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            self::$conexao->exec('set names utf8');
        }
        return self::$conexao;
    }
}
