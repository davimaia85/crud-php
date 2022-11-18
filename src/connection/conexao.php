<?php

function abrirConexao(): PDO
{
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '1234';
$banco = 'db_sistema';

$conexao = new PDO("mysql:host={$servidor};dbname={$banco}", $usuario, $senha);

return $conexao;
}

