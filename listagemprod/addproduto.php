<?php

    include_once "conexao.php";

    @$descricao     = $_POST['descricao'];
    @$marca         = $_POST['marca'];
    @$tipo          = $_POST['tipo'];
    @$preco         = $_POST['preco'];
    @$estoque       = $_POST['estoque'];

    //insere os dados na tabela produto
	$query = "INSERT INTO produtos (id_produto, descricao, tipo, marca, preco, estoque) 
    VALUE(null, '$descricao', '$tipo', '$marca', '$preco', '$estoque' )";
    
    mysqli_query($con, $query);

    //fecha a conexão com o banco de dados
    mysqli_close($con);

?>