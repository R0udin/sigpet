<?php
/*
$valor = array();
$mes = array();
$cor = array();

$host = "localhost";
$port = "5432";
$dbname = "SIGPET";
$user = "postgres";
$password = "admin";
$pg_options = "--client_encoding=UTF8";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
$conexao = pg_connect($connection_string);


if($conexao){
    //echo "Connected to ". pg_host($conexao);
}else{
    echo "Error in connecting to database.";
}

echo "<br />";
$tipopg = pg_query($conexao, "SELECT \"DESCRICAO_PAGAMT\" FROM tipo_pagamentos");
if (!$tipopg) {
    echo "An error occurred.\n";
    exit;
}

$nomefunc = pg_query($conexao, "SELECT \"NOME_FUNCIONARIO\" FROM funcionarios");
if (!$nomefunc) {
    echo "An error occurred.\n";
    exit;
}

$nomecliente = pg_query($conexao, "SELECT \"NOME_CLIENTE\" FROM clientes");
if (!$nomecliente) {
    echo "An error occurred.\n";
    exit;
}

$vendas = pg_query($conexao, "select \"DATA_VENDA_CAB\", \"VALOR_VENDA_CAB\" from venda_cabs order by \"DATA_VENDA_CAB\"");
if (!$vendas) {
    echo "An error occurred.\n";
    exit;
}

$mes = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
$venda18 = [];
$venda19 = [];
$venda20 = [];
while ($row = pg_fetch_assoc($vendas))
{
	if(date('Y', strtotime($row["DATA_VENDA_CAB"])) == '2018'){
		$venda18[] = $row["VALOR_VENDA_CAB"];
	}else if(date('Y', strtotime($row["DATA_VENDA_CAB"])) == '2019'){
		$venda19[] = $row["VALOR_VENDA_CAB"];
	}else{
		$venda20[] = $row["VALOR_VENDA_CAB"];
	}
}


//print_r ($venda20);

pg_close($conexao);

//$resnmcliente = pg_fetch_all($nomecliente);

?>
*/
