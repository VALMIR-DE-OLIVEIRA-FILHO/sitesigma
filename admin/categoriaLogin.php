<?php
//conexao com o banco de dados
include_once'../includes/_dados.php';
//include do arquivo head
include_once'_head.php';
//SQL consulta
$sql ="SELECT * FROM  categorias";
//executa a consulta de dados 
$resultado = mysqli_query($conexao, $sql);
// conta quantos registros existem
$total = mysqli_num_rowa($resultado);
// inclui o menu na pagina
include_once '_menu.php';
?>

<main>
    <h2>Administração das Categorias</h2>
    <a href="categoria-salvar.php">Inserir</a>
    <hr>
    <table boder="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </table>
<?php
//verifica se existe informacoes no banco de dados 
if ($resultado) {
    //coverte os resultados em uma linha da matriz
    while ($dado = mysqli_fetch_array($resultado)) {
        # code...
    
    # code...
?>
<tr>
<td><?php echo $dado['CategoriaID'];?></td>
<td><a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['CategoriaID'];?>"><?php echo $dado['Nome'];?></a></td>
<td><a href="categoria-processa.php?acao=excluir&id=<?php echo $dado['CategoriaID'];?>">Excluir</a></td>
</tr>



</main>


?>