<?php
require_once("conecta.php");
function listaProdutos($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao, "select * from produtos where usado='$_GET[tipo]'");
        while($produto = mysqli_fetch_assoc($resultado)){
            array_push($produtos, $produto);
        }
        return $produtos;
}

function insereProduto($conexao, $nome,$codigo, $preco, $descricao, $quantidade, $usado){
    $query = "insert into produtos (nome, codigo,preco, descricao, quantidade, usado) values ('{$nome}','{$codigo}',{$preco}, '{$descricao}','{$quantidade}','{$usado}')";
    //echo $query;
    return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, $id, $nome, $codigo,$preco, $descricao, $quantidade, $usado){
    $query = "update produtos set nome = '{$nome}', codigo = '{$codigo}' , preco = {$preco}, descricao = '{$descricao}', quantidade= {$quantidade}, usado = '{$usado}' where id = '{$id}'";
	//  echo $query;
    return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id){
    $query = "select * from produtos where id= '{$id}'";
    $resultado = mysqli_query($conexao, $query);
	//echo $query;
    return mysqli_fetch_assoc($resultado);
}

function removeProduto($conexao, $id){
    $query = "delete from produtos where id= {$id} ";
    return mysqli_query($conexao, $query);
}
