<?php

function abrirConexao() : PDO
{
$servidor = 'localhost';
$usuario = 'alessandro';
$senha = 'livre';
$banco = 'db_sistema';

$conexao = new PDO("mysql:host={$servidor};dbname={$banco}", $usuario, $senha);

return $conexao;
}