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

function excluir(){
    $id = $_GET['id'];
    excluirAluno($id);
    header('location: /listar');
}

function listar() : void
{
    $alunos = buscarAlunos();
    
    include '../src/views/listar.phtml';
}

function novo() : void
{ 
    include '../src/views/novo.phtml'; 
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
    include '../src/views/editar.phtml';
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