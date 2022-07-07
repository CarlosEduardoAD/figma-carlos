<?php
include_once("conexao.php");

$query = 'SELECT * FROM clientes INNER JOIN pedido ON clientes.id_cliente = pedido.id_user INNER JOIN item ON pedido.id_pedido = item.id_pedido INNER JOIN produto ON item.id_produto = produto.id_produto';
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$id_cliente = $row['id_cliente'];
$nome_cliente = $row['nome_usuario'];
$id_pedido = $row['id_pedido'];
$preco_total = $row['preco_total'];
$forma_pagamento = $row['forma_pagamento'];
$situacao = $row['situacao'];
$id_produto = $row['id_produto'];
$nome_produto = $row['nome_produto'];
$preco_produto = $row['preco_produto'];

while($row = mysqli_fetch_assoc($result)){
    $format = "<div style='width: 395px;
    height: 110px;
    display: flex;
    flex-direction: row;
    gap: 20px;
    font-family: 'Red Hat Display', sans-serif;
    border : none;'>
        <div style='display : flex;
        align-items: center;
        justify-content: start;
        background: rgb(0, 0, 0);
        width: 400px;
        color : white;
        border-radius: 23px 0px 14px 23px;'>
        <h1>%s</h1>
        </div>
    </div>";
    printf($format, $nome_cliente);
}
?>
