<?php
// "js/valor.js";
require_once("cabecalho.php");
require_once("banco-categoria.php");
//require_once("logica-usuario.php");


    $produto = array ("nome" => "", "descricao" => "", "preco" => "", "quantidade" => "", "usado" => "", "codigo" => "");
    //$usado = "";
    //$categorias = listaCategorias ($conexao);
?>

<!-- breadcrumb lifestyle -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <h2>Cadastrar Produtos</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li class="active">
                <a name="pr"></a>
                    <a href="produto-formulario.php"><strong>Cadastro de Mercadoria</strong></a>
                </li>

            </ol>
        </div>
        <div class="col-lg-2">

        </div>
</div>
<!-- breadcrumb lifestyle -->


<div class=" col-xs-12 col-sm-12 col-md-8 col-lg-8 animated fadeInRight">
    <br/>
     <form action="adiciona-produto.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
           
           <?php include("produto-formulario-base.php"); ?>

            
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Cadastrar">
                </div>
            
        </div>
    </form>

    <div class="ibox-footer">
            <span class="pull-right">
            Geek Space - <i class="fa fa-clock-o"></i> <?php echo date("d/m/y"); ?> 
            </span>
            <strong>"Fear leads to anger, Anger leads to hate, Hate leads to suffering" </strong>
    </div>

</div>

<?php
    include("rodape.php");
?>
