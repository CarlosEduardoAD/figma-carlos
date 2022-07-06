

<?php
include_once("conexao.php");

$quantidade = '';
$preco_unitario = "27.99";
$nome = "X-Defunto";
$comprar = "";
$preco_total = (int)$preco_unitario * (int)$quantidade;

if(!empty($_POST['quantidade'])){
    $quantidade = $_POST['quantidade'];
    //echo "$preco_total </br>";
}

if(!empty($_POST['comprar'])){
    $comprar = $_POST['comprar'];
    //echo "$preco_total </br>";
}

if($comprar == 'Comprar'){
    $res_select = "SELECT id_produto, nome_produto, preco_produto from produto WHERE nome_produto = '$nome'";
    $resposta_select = mysqli_query($conn, $res_select);
    $row = mysqli_fetch_assoc($resposta_select); 
    $id = $row['id_produto'];
    $nome = $row['nome_produto'];
    echo "$nome <br>";
    $preco = $row['preco_produto'];
    echo "$preco <br>";
    $res_insert = "INSERT INTO pedido (preco_total, forma_pagamento, id_user ,situacao) VALUES ('$preco_unitario', 'Cartão de crédito', '1' ,'Em Produção')";
    $resposta_insert = mysqli_query($conn, $res_insert);
    $res_insert2 = "INSERT into item (id_pedido, id_produto, quantidade, preco_unitario) VALUES ('1', '$id','$quantidade', '$preco_total')";
    $resposta_insert2 = mysqli_query($conn, $res_insert2);
    header("location : compras.php");
}