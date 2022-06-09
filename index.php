<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
 //$id= $_GET['id']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h1>Home</h1>



<?php 

for ($i=0; $i <3 ; $i++) { 
     echo $produtos[$i]['nome'];
     echo $produtos[$i]['preco'];
     echo "<br><hr><br>";
     echo "<img src='./content/".$produtos[$i]['imagem']."'>";
     echo "<br><hr><br>";
};

?>

<?php// include do foot''er
include_once './includes/_footer.php';
?> 
</body>
</html>


