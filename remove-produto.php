<?php 
require_once("cabecalho.php");
require_once("banco-produto.php"); 
require_once("logica-usuario.php");
?>
    <?php
    $id = $_POST['id'];
    removeProduto($conexao,$id);
        $_SESSION["success"] = "produto removido com sucesso. It will be back";
        header("Location: produto-lista.php");
    die();
    ?>
        <!--
        <p class="text-sucess"> Produto
            <?=$id?> Removido com Suceso!</p>
-->
        <?php include("rodape.php"); ?>
