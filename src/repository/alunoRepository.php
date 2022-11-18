<?php
declare(strict_types=1);

function buscarAlunos(): iterable
{
    $sql = 'SELECT * FROM tb_alunos';
    $alunos = abrirConexao()->query($sql);
    return $alunos;
}

function buscarUmAlunos($id): iterable
{
    $sql = "SELECT * FROM tb_alunos WHERE id = '{$id}'";
    $aluno = abrirConexao()->query($sql);
    return $aluno -> fetch(PDO::FETCH_ASSOC);
}

function novoAluno(string $nome, string $cidade, string $matricula): void
{     
         $sql = "INSERT INTO tb_alunos (nome, matricula, cidade) VALUES (?,?,?)";
         $query = abrirConexao()->prepare($sql);
         $query->execute([$nome, $matricula, $cidade]);
        
    
   
}  
function atualizarAluno() : void
{ 
     if (false === empty($_POST)){
         $id= $_POST['id'];
         $nome = $_POST['nome'];
         $matricula = $_POST['matricula'];
         $cidade = $_POST['matricula']; 
         $sql = "INSERT INTO tb_alunos SET nome = ?, matricula = ?, cidade = ? WHERE id = ?";
         $query = abrirConexao()->prepare($sql);
         $query->execute([$nome, $matricula, $cidade, $id]);
         header('location: /listar');
     }
   
}  

 
 

function excluirAluno(string $id): void
{
    $sql = "DELETE FROM tb_alunos WHERE id={$id}";
    abrirConexao()->query($sql);
}