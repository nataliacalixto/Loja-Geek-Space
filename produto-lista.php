<?php 
require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-produto.php"); ?>
    
<!-- breadcrumb lifestyle -->

    <div class="row wrapper border-bottom white-bg page-heading">
    <a name="pr"></a>
                        <div class="col-lg-10">
                            <h2>Produto Lista</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="active">
                                    <a href="produto-lista.php"><strong>Produtos Lista</strong></a>
                                </li>
                            </ol>
                        </div>
                        <div class="col-lg-2">

                        </div>
                    </div>
<!-- breadcrumb lifestyle -->

<?php
   $produtos =  listaProdutos($conexao);
   foreach($produtos as $produto) :
?>
                      
<div class="animated fadeInRight">

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                               <img class=" img-circle img-responsive center-block" src="img/imgnao.png" width="300px" height="300px">
                            </div>

                            <div class="product-desc">
                                <span class="product-price">
                                    R$ <?php echo number_format($produto['preco'],2,",",".");?>
                                </span>
            
                                <a href="#" class="product-name"> <?php print $produto['nome'] ?></a>


                                <div class="small m-t-xs"><strong>Código de Mercadoria: </strong>
                                    <?php print $produto['codigo'];?>
                                </div>
                                <div class="small m-t-xs"><strong>Descrição de Produto: </strong>
                                    <?php print substr($produto['descricao'],0,37) ?>...
                                </div>
                                <div class="small m-t-xs"><strong>Quantidade: </strong>
                                    <?php print $produto['quantidade'];?>
                                </div>
                                <div class="small m-t-xs"><strong>Tipo de Negócio: </strong>
                                    <?php if ($produto['usado']=='c')print "Compra"; if ($produto['usado']=='v')print "Venda"; ?>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="produto-descricao.php?id=<?php print $produto['id'];?>#pr" class="btn btn-primary btn-sm">Detalhes <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
</div>  

                    <!-- Modal 
                    
                    <div class="modal fade" id="Desc-prod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"> <?php print $produto['nome'] ?> </h4>
                          </div>
                          
                          <div class="modal-body">
                            <img class="img-thumbnail img-responsive" src="img/<?php print $produto['imagem']?>" height="150px" width="120px">
                            <p>R$<?php print $produto['preco']?></p>
                            <p> <?php print substr($produto['descricao']) ?> </p>
                          </div>
                          
                          <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
                          </div>
                        
                        </div>
                      </div>
                    </div>
                     modal fim Declaração Territorial Rural -->
<?php
    endforeach;
?>
 <div class="row"></div>
<div class="ibox-footer">
    <span class="pull-right">
        Geek Space - <i class="fa fa-clock-o"></i> <?php echo date("d/m/y"); ?> 
    </span>
        <strong> "Ohhh. Great warrior. Wars not make one great."</strong>
</div>
            
            <?php include("rodape.php"); ?>

<!-- botoes principais

<div>    
                                    <p><button type="button" class="btn btn-success center-block" data-toggle="modal" data-target="#Desc-prod">Detalhes</button></p> 
                                </div>    
                                <div>
                                    <a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">Alterar</a>
                                </div>
                                <div>
                                    <form action="remove-produto.php?id" method="post">
                                        <input type="hidden" name="id" value="<?=$produto['id']?>">
                                        <button class="btn btn-danger">Remover</button>

                                    </form>
                                </div>

-->                                