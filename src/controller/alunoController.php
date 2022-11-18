<?php

declare(strict_types=1); //difinindo que o arquivo trabalha os tipos de dados

function renderizar(string $nomeDoArquivo, mixed $dados = null){
    include '../src/views/head.phtml';
    include "../src/views/{$nomeDoArquivo}.phtml";
    $dados;
    include '../src/views/foot.phtml';

}

function redirecionar(string $onde){
    header("location: {$onde}");
}

function inicio() : void //void = funcao sem retorno
{
    renderizar("inicio");
}

function excluir(){
    $id = $_GET['id'];
    excluirAluno($id);
    
}

function listar() : void
{
    $alunos = buscarAlunos();
    
    renderizar("listar", $alunos);
}

function novo() : void
{ 
    renderizar("novo"); 
    if (false === empty($_POST)){
        $nome = trim($_POST['nome']);
        $cidade = trim($_POST['cidade']);
        $matricula = trim($_POST['matricula']);

        if(true === validateForm($nome, $cidade, $matricula)){
            novoAluno($nome, $cidade, $matricula);
            redirecionar('/listar');
        }
    }
}  
    
function editar() : void
{
    $id = $_GET["id"];
    $aluno = buscarUmAlunos($id);
    renderizar("editar");
    if (false === empty($_POST)){
        $nome = trim($_POST['nome']);
        $cidade = trim($_POST['cidade']);
        $matricula = trim($_POST['matricula']);

        if(true === validateForm($nome, $cidade, $matricula)){
            atualizarAluno($nome, $cidade, $matricula, $id);
            redirecionar('/listar');
        }
    }
   
}