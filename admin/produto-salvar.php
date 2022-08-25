<?php 
include_once "../includes/_banco.php";


if ( isset ($_GET['id']) || !empty ($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE ProdutosID = ".$id;
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
} else {
    $id = '';
    $dados['Nome'] = '';
    $dados['Descricao'] = '';
}

?>

<main>
    <h2 style="text-align: center;">Adminstração das Categorias</h2>
    <a href="produto-lista.php">Listagem</a>
    <hr>
    <form style="text-align: center;" action="produto-processa.php" method="post" ectype="multipart/form-data">
        <input type= "hidden" value="salvar" name="acao" id="acao">
        <input type="hidden" name="id" value="<?php echo $id;?>"><br>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="<?php echo $dados['Nome'];?>"><br>
        <label for="descricao">Descrição:</label><br>
        <textarea name="descricao" id="descricao" cols="30" rows="10"><?php echo $dados ['Descricao'];?></textarea><br>
        <hr>
        <input type="submit" value="Enviar">
    </form>
</main>

<?php

?>