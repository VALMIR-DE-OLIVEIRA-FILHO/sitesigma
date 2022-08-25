<?php 
include_once "../includes/_banco.php";



$sql = "SELECT * from produtos";

$resultado = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($resultado);


?>
<main>
<h2 style="text-align: center"> Administração de categorias</h2>

<a href="produto-salvar.php">Inserir</a>
<hr>
<table border= "1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Ações</th>
</tr>

<?php

if ($resultado){

 while ($dado = mysqli_fetch_array($resultado)) {
  
?>
  
<tr>
<td><?php echo $dado['ProdutosID'];?></td>
<td><a href="produto-salvar.php?acao=salvar&id=<?php echo $dado['ProdutosID'];?>"><?php echo $dado['Nome'];?></a></td>
<td><a href="produto-processa.php?acao=excluir&id=<?php echo $dado['ProdutosID'];?>">Excluir</a></td>
</tr>

<?php
 }

} else {
?>
<tr>
<td colspan="3">Resultados não encontrados</td>
</tr>
<?php
}
?>
<tr>
<td colspan="3">Total de registros: <?php echo $total;?></td>
</tr>

</table>

</main>
<?php
