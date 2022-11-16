<?php

declare(strict_types=1); //difinindo que o arquivo trabalha os tipos de dados

//FORMATAR FUNCAO COM DADOS TIPADOS
// function soma(float $n1, float $n2): float
// {
//     return $n1 + $n2;
// }
// function welcome(string $nome): string
// {
//     return "ebm vindo {$nome}";
// }



function inicio() : void //void = funcao sem retorno
{
    include '../src/views/inicio.phtml';
}

function listar() : void
{
    $select = abrirConexao()->query("SELECT * FROM tb_bebidas");
    include '../src/views/listar.phtml';
}

function novo() : void
{   
    if (false === empty($_POST)){
        $nome = $_POST['nome'];
        $quantidade = $_POST['quantidade'];
        $select = "INSERT INTO tb_bebidas (nome, quantidade) VALUES '{$nome}', '{$quantidade}';
        $query = abrirConexao()->prepare($select);
        $query->execute;
    }
    include '../src/views/novo.phtml';
}
function editar() : void
{
    include '../src/views/editar.phtml';
}
