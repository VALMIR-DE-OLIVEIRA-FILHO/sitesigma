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

        $sql="DELETE FROM produtos Where ProdutosID =".$id;

        mysqli_query($conexao,$sql);

        header('location: ./produto-lista.php');

        break;
    
    case 'salvar':
        

        $nome= $_POST['nome'];
        $descricao= $_POST['descricao'];

        if (!isset($_POST['id'])|| empty($_POST['id'])) {

            $sql = "INSERT INTO produtos (Nome,Descricao) VALUES('".$nome."','".$descricao."')";

            # code...
        }else  {
            $sql= "UPDATE produtos SET Nome = '".$nome."', Descricao = '".$descricao."'  WHERE  ProdutosID ='".$id."' ";
        }

        mysqli_query($conexao, $sql);


        header('location: ./produto-lista.php');
        break;
       
}