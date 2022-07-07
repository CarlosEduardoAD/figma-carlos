

<?php
include_once("conexao.php");

$quantidade = '';
$preco_unitario = "27.99";
$nome = "X-Defunto";
$comprar = "";

if(!empty($_POST['quantidade'])){
    $quantidade = $_POST['quantidade'];
    //echo "$preco_total </br>";
}

if(!empty($_POST['comprar'])){
    $comprar = $_POST['comprar'];
    //echo "$preco_total </br>";
}

if($comprar == 'Comprar'){
    $res_select3 = "SELECT * FROM clientes WHERE nome_usuario = 'Carlos'";
    $resposta_select3 = mysqli_query($conn, $res_select3);
    $row2 = mysqli_fetch_assoc($resposta_select3);
    $id_cliente = $row2['id_cliente'];
    $res_select = "SELECT id_produto, nome_produto, preco_produto from produto WHERE nome_produto = '$nome'";
    $resposta_select = mysqli_query($conn, $res_select);
    $row = mysqli_fetch_assoc($resposta_select);
    $id = $row['id_produto'];
    $nome = $row['nome_produto'];
    $preco = $row['preco_produto'];
    $preco_total = (float)$preco_unitario * (int)$quantidade;
    $res_insert = "INSERT INTO pedido (preco_total, forma_pagamento, id_user, situacao) VALUES ('$preco_unitario', 'Cartão de crédito', '$id_cliente' ,'Em Produção')";
    $resposta_insert = mysqli_query($conn, $res_insert);
    $res_insert2 = "INSERT into item (id_pedido, id_produto, quantidade, preco_unitario) VALUES ('1', '$id','$quantidade', '$preco_unitario')";
    $resposta_insert2 = mysqli_query($conn, $res_insert2);
    header("location: menu.html");
}
