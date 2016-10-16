<?php 
/*print "<pre>";
print_r ($_POST);
print "</pre>";*/
require_once("cabecalho.php");
require_once("banco-produto.php");
///require_once("logica-usuario.php");

//srequire_once("upload-img.php");
//verificaUsuario();

$nome=$_POST["nome"];
//$preco=str_replace(',', '.', str_replace('.', '',$_POST["preco"]));
$preco=$_POST["preco"];
$descricao=$_POST["descricao"];
$quantidade=$_POST["quantidade"];
$usado = $_POST["categoria"];
$codigo=$_POST["codigo"];
	
	?>
    <div class="col-md-12"> &nbsp;</div>
    <?php		

if (insereProduto($conexao, $nome , $codigo, $preco, $descricao,$quantidade, $usado)){ ?>

    <div class="alert alert-success" role="alert">
    <strong>Produto <?php print $nome;?>, adicionado com sucesso!</strong></div>
       
    <?php }

else {
      $msg = mysqli_error($conexao);

?>
        <div class="alert alert-danger" role="alert">
            <strong>Produto <?php print $nome;?>, não adicionado!</strong>
        </div>
        <?php

}

//mysqli_close($conexao);

?>

            <?php
    include("rodape.php");
?>
