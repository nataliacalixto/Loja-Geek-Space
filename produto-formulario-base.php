   <div class="container animated fadeInRight">
   <div class="form-group">
        <label>Nome: </label>  
        <input class="form-control m-b" type="text" name="nome" value="<?php print $produto['nome'];?>" placeholder="Mestre Yoda">
    </div>
    <div class="form-group">
        <label>Código do Produto: </label>  
        <input class="form-control m-b" type="text" name="codigo" value="<?php print $produto['codigo'];?>" placeholder="Yoda00001">
    </div>
    <div class="form-group">
       <label>Preço: </label>
       <input class="form-control m-b" type="number" step="any" name="preco" value="<?php if(!empty($produto['preco'])){print $produto['preco'];} ?>"  id="TextBoxNumeric" >
        
    </div>
    <div class="form-group">
        <label>Descrição: </label>
        <textarea class="form-control m-b" name="descricao" placeholder="That is why you fail."><?php print $produto['descricao']; ?></textarea>
    </div>
    <div class="form-group">
    <label>Quantidade: </label>
        <input type="number" class="form-control m-b" name="quantidade"  value="<?php print $produto['quantidade'];?>">
    </div>
    
    <div class="form-group">
        <label>Tipo: </label>
         <select class="form-control m-b" name="categoria">
                   <option value="" <?php if (empty($produto['usado']))print "selected";?>>Selecione..</option>
                   <option value="c" <?php if ($produto['usado']=='c')print "selected";?>>Compra</option>
                   <option value="v" <?php if ($produto['usado']=='v')print "selected";?>>Venda</option>     
        </select>
    </div>  
	    
    </div>
           