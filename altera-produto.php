<?php 
require_once("cabecalho.php");
require_once("banco-produto.php");
//require_once("Upload.class.php");

/*print "<pre>";
print_r ($_POST);
print "</pre>";*/


$nome=$_POST["nome"];
$preco=$_POST["preco"];
$descricao=$_POST["descricao"];
$quantidade=$_POST["quantidade"];
$usado = $_POST["categoria"];
$codigo=$_POST["codigo"];
$id= $_POST["id"];

	//echo $imagem."<br>";?>
 <div class="col-md-12"> &nbsp;</div>
    
    <?php

if (alteraProduto($conexao, $id,$nome , $codigo, $preco, $descricao,$quantidade, $usado)){ ?>
    <div class="alert alert-success" role="alert">
    <strong>Produto <?php print $nome;?>, alterado com sucesso!</strong></div>
       
    <?php }

else {
      $msg = mysqli_error($conexao);

?>
        <div class="alert alert-danger" role="alert">
            <strong>Produto <?php print $nome;?>, não alterado!</strong>
        </div>
        <?php

}

//mysqli_close($conexao);

?>

            <?php
    include("rodape.php");
?>
