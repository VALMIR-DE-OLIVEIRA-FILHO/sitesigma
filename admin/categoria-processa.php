<?php

include_once'../includes/_dados.php';
include_once'../includes/_banco.php';

//captura a acao do usuario
$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch ($acao) {
    //acao de excluir dados
    case 'excluir':
        //monta a SQL que exclui os registros

        $sql="DELETE FROM categorias Where CategoriaID =".$id;

        mysqli_query($conexao,$sql);

        header('location: ./categoria-lista.php');

        break;
    
    case 'salvar':
        

        $nome= $_POST['nome'];
        $descricao= $_POST['descricao'];

        if (!isset($_POST['id'])|| empty($_POST['id'])) {

            $sql = "INSERT INTO categorias (Nome,Descricao) VALUES('".$nome."','".$descricao."')";

            # code...
        }else  {
            $sql= "UPDATE categorias SET Nome = '".$nome."', Descricao = '".$descricao."'  WHERE  CategoriaID ='".$id."' ";
        }

        mysqli_query($conexao, $sql);


        header('location: ./categoria-lista.php');
        break;
       
}