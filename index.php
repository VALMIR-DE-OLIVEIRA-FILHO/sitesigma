<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
 //$id= $_GET['id']; ?>

  <body>
  <div class="container">
  <div class="row">
    
    <?php 

for ($i=0; $i <3 ; $i++) { 
    echo "<div id='animais' class='col-sm'>";
    echo "<h2 id='identid' class='container'>Animal:</h2>";
     echo  "<p id='nome' class='container'>".$produtos[$i]['nome']."</p>";
     echo  "<p id='preco' class='container'>  Preço: R$ ".$produtos[$i]['preco']."</p>";
     echo "<img class='container' src='./content/".$produtos[$i]['imagem']."'>";
     echo "</div>";
};
?>
    </div>
  </div>
</div>
<?php
// include do foot''er
include_once './includes/_footer.php';
?> 

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>