<?php

$rota = $_SERVER['REQUEST_URI'];

require_once '../src/controller/alunoController.php'; //require_once evita que o arquivo seja duplicado
require_once '../src/connection/conexao.php';
$paginas = [
    '/' => 'inicio',
    '/listar' => 'listar',
    '/novo' => 'novo',
    '/editar' => 'editar',
];

include '../src/views/menu.phtml';

if (false === isset($paginas[$rota])){
    include '..src/views/erro404.phtml';
    exit;
};

echo $paginas[$rota]();