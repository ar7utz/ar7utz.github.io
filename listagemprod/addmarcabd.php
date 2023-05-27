<?php
    include_once "conexao.php";
    include_once "index.php";

    @$addmarca = $_POST['addmarca'];

    //insere os dados na tabela produto
    $query = "INSERT INTO marca (id_marca, addmarca)
    VALUE(null, '$addmarca' )";
    
    mysqli_query($con, $query);

    //fecha a conexão com o banco de dados
    mysqli_close($con);
?>

