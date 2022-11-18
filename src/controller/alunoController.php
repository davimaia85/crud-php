<?php

declare(strict_types=1); //difinindo que o arquivo trabalha os tipos de dados

function rederizar(string $nomeDoArquivo, mixed $dados = null){
    include "../src/views/{$nomeDoArquivo}.phtml";
    $dados;

}

function inicio() : void //void = funcao sem retorno
{
    rederizar("inicio");
}

function excluir(){
    $id = $_GET['id'];
    excluirAluno($id);
    header('location: /listar');
}

function listar() : void
{
    $alunos = buscarAlunos();
    
    rederizar("listar", $alunos);
}

function novo() : void
{ 
    rederizar("novo"); 
    if (false === empty($_POST)){
        $nome = trim($_POST['nome']);
        $cidade = trim($_POST['cidade']);
        $matricula = trim($_POST['matricula']);

        if(true === validateForm($nome, $cidade, $matricula)){
            novoAluno($nome, $cidade, $matricula);
            header('location: /listar');
        }
    }
}  
    
function editar() : void
{
    $id = $_GET["id"];
    $aluno = buscarUmAlunos($id);
    rederizar("editar");
    if (false === empty($_POST)){
        $nome = trim($_POST['nome']);
        $cidade = trim($_POST['cidade']);
        $matricula = trim($_POST['matricula']);

        if(true === validateForm($nome, $cidade, $matricula)){
            atualizarAluno($nome, $cidade, $matricula, $id);
            header('location: /listar');
        }
    }
   
}