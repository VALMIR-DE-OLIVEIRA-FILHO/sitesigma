<?php
include_once'../includes/_dados.php';

$acao = $_REQUEST['acao'];

$id = $_REQUEST['id'];


switch ($variable) {
    case 'excluir':
        $sql= "DELETE * FROM categoria WHERE categoriaID=".$id;

        mysqli_query($conexao, $sql);

        header('location: ./categoria-lista.php');
        break;
    
    case 'salvar':
        

        $nome= $_POST['nome'];
        $descricao = $_POST['descricao'];


        if ($_FILES['foto']['size']>0) {
            $uploaddir= '../imagens/categorias/';

            $extensao= pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

            $nomearquivo= 'categoria-'.$id.'-'.rand().'.'.$extensao;

            $uploadfile= $uploaddir . $nomearquivo;

            move_upload_file($_FILES['foto']['tpm-name'], $uploadfile);
        }else{
            $nomearquivo=$_POST['imagem'];
        }

        if (!isset($_POST['id'])|| empty($_POST['id'])) {
            $sql= "INSERT INTO 'categoria'('nome','descricao','imagem') VALUES
        }
        break;
        
}

?>